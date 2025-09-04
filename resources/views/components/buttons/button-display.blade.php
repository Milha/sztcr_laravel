<a {{ $attributes->merge(['class' => 'block rounded-xl border border-gray-900 p-4 hover:bg-gray-100 transition']) }}><x-heroicon-s-eye
        class="w-5 h-5 text-gray-500  mr-2" />
    {{ $slot }}
</a>
