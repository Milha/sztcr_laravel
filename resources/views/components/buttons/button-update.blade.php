<button
    {{ $attributes->merge(['class' => 'inline-flex items-center bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow mt-3 w-[10rem]']) }}><x-heroicon-s-cloud-arrow-up
        class="w-5 h-5 text-gray-800 mr-2" />
    {{ $slot }}
</button>
{{-- <button {{ $attributes }}
    class="bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow mt-3">{{ $slot }}<x-heroicon-s-arrow-path
        class="w-5 h-5 text-gray-500 mr-2" /></button> --}}

{{-- <button
    {{ $attributes->merge(['class' => 'inline-flex items-center bg-blue-300 hover:bg-blue-500 text-gray-700 hover:text-gray-200 text-gray-800 hover:text-gray-200 font-semibold px-4 py-2 my-2 mx-1 rounded w-[10rem]']) }}><x-heroicon-s-arrow-path
        class="w-5 h-5 text-gray-500 mr-2" />
    {{ $slot }}
</button> --}}
