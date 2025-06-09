<div class="max-w-6xl mx-auto px-4 py-10">
    <h1 class="text-3xl font-bold mb-6 text-white">Tous mes articles</h1>

    @if ($articles->isEmpty())
        <div class="text-white">Aucun article trouvé.</div>
    @else
        <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">
            @foreach ($articles as $article)
                <div class="bg-white rounded-lg shadow hover:shadow-md transition overflow-hidden">
                    @if ($article->image)
                        @if (env('APP_ENV') == 'local')
                            <img src="{{ asset('storage/' . $article->image) }}" alt="{{ $article->title }}"
                                class="w-full h-128 object-cover">
                        @else
                            <img src="{{ asset('public/storage/' . $article->image) }}" alt="{{ $article->title }}"
                                class="w-full h-128 object-cover">
                        @endif
                    @endif

                    <div class="p-4 space-y-2">
                        <h2 class="text-xl font-semibold text-gray-800">
                            {{ $article->title }}
                        </h2>

                        <p class="text-sm text-gray-500">
                            Publié le {{ $article->created_at->format('d/m/Y à H:i') }}
                        </p>

                        <p class="text-gray-700 text-sm line-clamp-3">
                            {!! Str::limit(strip_tags($article->content), 150) !!}
                        </p>

                        <div class="flex justify-between items-center mt-3">
                            <a href="{{ route('articles.show', $article->slug) }}"
                                class="text-blue-600 text-sm font-medium hover:underline">
                                Lire l'article →
                            </a>

                            {{-- Bouton visible uniquement pour admin --}}
                            @auth
                                <a href="{{ route('admin.articles.edit', $article->id) }}"
                                    class="text-sm text-yellow-600 hover:underline font-medium">
                                    📝 Modifier
                                </a>
                            @endauth
                        </div>

                    </div>
                </div>
            @endforeach
        </div>

        <!-- Pagination Livewire -->
        <div class="mt-8">
            {{ $articles->links() }}
        </div>
    @endif
</div>
