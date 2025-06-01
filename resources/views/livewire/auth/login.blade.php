@section('name', 'CONNEXION')
<form wire:submit.prevent="login" class="cover w-full pt-6">
    @error('email') <div class="my-1 bg-red-50 p-2 rounded text-red-500 text-sm">{{ $message }}</div> @enderror
    @error('password') <div class="my-1 bg-red-50 p-2 rounded text-red-500 text-sm">{{ $message }}</div> @enderror
    <div class="mb-6">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
            Email address <span class="text-red-500">*</span>
        </label>
        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="email" wire:model="email" type="email" />
    </div>
    <div class="mb-6">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
            Password <span class="text-red-500">*</span>
        </label>
        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="password" wire:model="password" type="password" />
    </div>


    <div class="flex items-center justify-between mt-8 w-full">
        <button type="submit" class="w-full focus:outline-none text-white bg-green-500 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
            Se Connecter</button>
    </div>
</form>
