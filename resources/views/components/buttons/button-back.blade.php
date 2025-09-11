<a
    {{ $attributes->merge(['class' => 'inline-flex align-baseline font-bold text-sm text-gray-500 hover:text-gray-800 text-center items-center']) }}><x-heroicon-s-chevron-left
        class="w-4 h-4 mr-2" />
    {{ $slot }}
</a>
{{-- class="inline-flex align-baseline font-bold text-sm text-blue-500 hover:text-blue-800 text-center items-center" --}}
