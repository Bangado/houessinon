<x-layouts.base-auth>
    <div class="min-h-screen bg-gray-50 flex flex-col justify-center py-12 lg:px-8">
        <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md sm:mx-10">
            <div class="bg-white py-8 px-4 shadow sm:rounded-lg sm:px-10 mx-2">
                <div class="w-full flex justify-between items-center">
                    <h3><span class="text-orange-500">Dumas</span> HOUESSINON</h3>
                    <p class="font-bold">CONNEXION</p>
                </div>
                {{ $slot }}
            </div>
        </div>
    </div>
</x-layouts.base-auth>