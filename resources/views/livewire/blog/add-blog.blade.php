
<div class="bg-gray-100 py-10 px-4">

    <div class="max-w-3xl mx-auto p-6 bg-white rounded shadow space-y-6">
        <h2 class="text-xl font-bold">Créer un article</h2>

        <!-- Message de succès -->
        @if (session()->has('success'))
            <div class="p-4 mb-4 text-sm text-green-700 bg-green-100 rounded-lg">
                {{ session('success') }}
            </div>
        @endif

        <!-- Erreurs globales -->
        @if ($errors->any())
            <ul class="text-sm text-red-600 list-disc pl-5">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif

        <!-- Formulaire -->
        <form wire:submit.prevent="save" class="space-y-5">
            <!-- Titre -->
            <div>
                <label for="title" class="block text-sm font-medium">Titre</label>
                <input type="text" wire:model="title" id="title"
                    class="mt-1 block w-full rounded border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500" />
                @error('title')
                    <span class="text-red-600 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <!-- Image -->
            <div>
                <label class="block text-sm font-medium">Image</label>
                <input type="file" wire:model="image" accept="image/*" class="mt-1" />
                @error('image')
                    <span class="text-red-600 text-sm">{{ $message }}</span>
                @enderror

                @if ($image)
                    <div class="mt-2">
                        <img src="{{ $image->temporaryUrl() }}" class="w-full max-h-64 object-contain rounded" />
                    </div>
                @endif
            </div>

            <!-- Contenu -->
            <div wire:ignore>
                <label for="content" class="block text-sm font-medium">Contenu</label>
                <textarea id="content" class="w-full rounded border-gray-300 shadow-sm"></textarea>
                @error('content')
                    <span class="text-red-600 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <!-- Bouton -->
            <div>
                <button type="submit"
                    class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">Enregistrer</button>
            </div>
        </form>
    </div>

    <!-- Scripts Flowbite -->
    <script src="https://unpkg.com/flowbite@2.3.0/dist/flowbite.min.js"></script>

    <!-- TinyMCE Config + Synchronisation Livewire -->
    <script>
        document.addEventListener('livewire:load', function () {
            tinymce.init({
                selector: '#content',
                plugins: [
                    'anchor autolink charmap codesample emoticons image link lists media',
                    'searchreplace table visualblocks wordcount checklist mediaembed',
                    'casechange formatpainter pageembed a11ychecker tinymcespellchecker',
                    'permanentpen powerpaste advtable advcode editimage advtemplate ai',
                    'mentions tinycomments tableofcontents footnotes mergetags autocorrect',
                    'typography inlinecss markdown importword exportword exportpdf'
                ],
                toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | ' +
                    'link image media table mergetags | addcomment showcomments | spellcheckdialog a11ycheck typography | ' +
                    'align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
                tinycomments_mode: 'embedded',
                tinycomments_author: 'Author name',
                mergetags_list: [{
                    value: 'First.Name',
                    title: 'First Name'
                }, {
                    value: 'Email',
                    title: 'Email'
                }],
                ai_request: (request, respondWith) => respondWith.string(() => Promise.reject(
                    'See docs to implement AI Assistant')),

                setup: function (editor) {
                    editor.on('Change KeyUp', function () {
                        @this.set('content', editor.getContent());
                    });
                }
            });
        });
    </script>
</div>
