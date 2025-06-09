<div class="max-w-3xl mx-auto py-10 px-4">
    <h1 class="text-2xl font-bold mb-6">Modifier l'article</h1>

    @if (session()->has('success'))
        <div class="bg-green-100 text-green-800 p-3 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

    <form wire:submit.prevent="update" class="space-y-6">

        <!-- Titre -->
        <div>
            <label class="block text-sm font-medium">Titre</label>
            <input type="text" wire:model="title" class="w-full border border-gray-300 rounded px-3 py-2 shadow-sm">
            @error('title')
                <span class="text-red-600 text-sm">{{ $message }}</span>
            @enderror
        </div>

        <!-- Image actuelle -->
        @if ($existingImage)
            <div>
                <p class="text-sm text-gray-500">Image actuelle :</p>
                @if (env('APP_ENV') == 'local')
                    <img src="{{ asset('storage/' . $existingImage) }}" class="w-full max-h-60 object-cover rounded" />
                @else
                    <img src="{{ asset('public/storage/' . $existingImage) }}" class="w-full max-h-60 object-cover rounded" />
                @endif
            </div>
        @endif

        <!-- Nouvelle image -->
        <div>
            <label class="block text-sm font-medium">Nouvelle image (optionnel)</label>
            <input type="file" wire:model="newImage" accept="image/*">
            @error('newImage')
                <span class="text-red-600 text-sm">{{ $message }}</span>
            @enderror

            @if ($newImage)
                <div class="mt-2">
                    <img src="{{ $newImage->temporaryUrl() }}" class="w-full max-h-60 object-cover rounded">
                </div>
            @endif
        </div>

        <!-- Contenu avec TinyMCE -->
        <div wire:ignore>
            <label class="block text-sm font-medium">Contenu</label>
            <textarea id="editor" class="w-full rounded border-gray-300 shadow-sm"></textarea>
            @error('content')
                <span class="text-red-600 text-sm">{{ $message }}</span>
            @enderror
        </div>

        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
            Enregistrer
        </button>
    </form>
</div>

<!-- Scripts TinyMCE -->
@push('scripts')
    <script src="https://cdn.tiny.cloud/1/kueldrwgikubo5osmzxosl5stwnbs5nlw45bn7i9yb183u3j/tinymce/7/tinymce.min.js"
        referrerpolicy="origin"></script>

    <script>
        function initTinyMCE(content = '') {
            if (tinymce.get("editor")) {
                tinymce.get("editor").remove();
            }

            tinymce.init({
                selector: '#editor',
                height: 400,
                menubar: false,
                plugins: 'link image code lists table media',
                toolbar: 'undo redo | formatselect | bold italic underline | alignleft aligncenter alignright | bullist numlist | link image media | code',
                setup: function(editor) {
                    editor.on('init', function() {
                        editor.setContent(content);
                    });

                    editor.on('Change KeyUp', function() {
                        @this.set('content', editor.getContent());
                    });
                }
            });
        }

        document.addEventListener('livewire:load', function() {
            initTinyMCE(@this.get('content') ?? '');

            Livewire.hook('message.processed', (message, component) => {
                initTinyMCE(@this.get('content') ?? '');
            });
        });
    </script>
@endpush
