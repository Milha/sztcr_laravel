@props(['icon' => false])

<a
    {{ $attributes->merge([
        'class' =>
            'inline-flex items-center text-center py-2.5 px-5 me-2 mb-2 mt-5 font-medium min-w-[10rem] text-gray-900 focus:outline-none bg-teal-300 text-gray-700 hover:bg-teal-500 hover:text-gray-100 rounded-lg border border-gray-200 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 whitespace-nowrap',
    ]) }}>
    @if ($icon)
        <x-heroicon-s-arrow-left class="w-4 h-4 mr-2" />
    @endif {{ $slot }}
</a>
