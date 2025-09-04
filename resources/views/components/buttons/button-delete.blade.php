<button
    {{ $attributes->merge(['class' => 'inline-flex items-center bg-red-400 hover:bg-red-700 text-gray-600 hover:text-gray-200 font-semibold px-4 py-2 mx-1 rounded w-[6.5rem]']) }}><x-heroicon-s-trash
        class="w-5 h-5 text-gray-500 mr-2" />

    {{ $slot }}
</button>
