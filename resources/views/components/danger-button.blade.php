<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex btn items-center px-4 py-2 bg-red-600  font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-500 active:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
