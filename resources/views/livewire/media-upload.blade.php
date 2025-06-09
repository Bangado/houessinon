<div class="max-w-xl mx-auto py-10 px-4 bg-white ">
    <h1 class="text-2xl font-bold mb-4">Ajouter une image</h1>

    @if (session()->has('success'))
        <div class="bg-green-100 text-green-800 p-3 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

    <form wire:submit.prevent="save" class="space-y-4">
        <div>
            <input type="file" wire:model="image" accept="image/*" class="block w-full" />
            @error('image') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
        </div>

        @if ($image)
            <div class="mt-4">
                <img src="{{ $image->temporaryUrl() }}" class="rounded max-h-64 w-auto" />
            </div>
        @endif

        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
            Enregistrer
        </button>
    </form>
</div>
