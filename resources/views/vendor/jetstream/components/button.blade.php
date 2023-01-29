<button {{ $attributes->merge(['type' => 'submit', 'class' => 'flex items-center justify-center w-full px-10 py-4 text-base font-medium text-center text-white transition duration-500 ease-in-out transform bg-yellow-400 rounded-xl hover:bg-yellow-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-yellow-500']) }}>
    {{ $slot }}
</button>
