<button {{ $attributes->merge(['type' => 'submit', 'class' => 'items-center px-4 py-2 -mt-1 bg-radial border border-transparent rounded-md font-semibold text-xs text-white tracking-widest hover:bg-green-700 focus:bg-green-700 active:bg-green-700 focus:outline-none focus:ring-2 focus:ring-indigo-700 focus:ring-offset-2 disabled:opacity-50 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
