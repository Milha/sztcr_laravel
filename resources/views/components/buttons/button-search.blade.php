<button
    {{ $attributes->merge(['class' => 'inline-flex items-center font-semibold py-2 px-4 border border-gray-400 rounded shadow m-3 w-[10rem]']) }}>
    <x-heroicon-s-magnifying-glass class="w-5 h-5 text-gray-800 mx-4" />
    {{-- <x-heroicon-s-cloud-arrow-up class="w-5 h-5 text-gray-800 mx-4" /> --}}
    {{ $slot }}
</button>
