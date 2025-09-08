<a
    {{ $attributes->merge(['class' => 'inline-flex items-center bg-blue-300 hover:bg-blue-600 text-gray-700 hover:text-gray-200 font-semibold px-4 py-2 mx-1 rounded w-[6.5rem]']) }}><x-heroicon-s-eye
        class="w-5 h-5 text-gray-500  mr-2" />
    {{ $slot }}
</a>
