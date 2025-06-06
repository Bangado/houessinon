<div class="max-w-4xl mx-auto py-10 px-4">
    <article class="bg-white p-6 rounded-lg shadow space-y-6">

        <!-- Image -->
        @if ($article->image)
            <img src="{{ asset('storage/' . $article->image) }}"
                 alt="{{ $article->title }}"
                 class="w-full h-auto rounded-lg object-cover mb-4">
        @endif

        <!-- Titre -->
        <h1 class="text-3xl font-bold text-gray-900">{{ $article->title }}</h1>

        <!-- Date -->
        <p class="text-sm text-gray-500">
            Publié le {{ $article->created_at->translatedFormat('d F Y à H:i') }}
        </p>

        <!-- Contenu -->
        <div class="prose max-w-none">
            {!! $article->content !!}
        </div>

        <!-- Retour -->
        <a href="{{ route('blog') }}"
           class="mt-6 inline-block text-blue-600 hover:underline text-sm">
           ← Retour à la liste des articles
        </a>
    </article>
</div>
