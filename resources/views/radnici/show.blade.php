<x-layout>
    <x-slot:heading>
        Podaci o radniku
    </x-slot:heading>

    <div class="bg-white overflow-hidden shadow rounded-lg border">
        {{-- <div class="px-4 py-5 sm:px-6">
            <h3 class="text-lg leading-6 font-medium text-gray-900">
                {{ $radnik->ime }}
            </h3>
            <p class="mt-1 max-w-2xl text-sm text-gray-500">
                radnik je u ulozi: {{ $radnik->role }}.
            </p>
        </div> --}}
        <div class="border-t border-gray-200 px-4 py-5 sm:p-0">
            <dl class="sm:divide-y sm:divide-gray-200">
                <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-500">
                        Puno ime
                    </dt>
                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                        {{ $radnik->ime }} {{ $radnik->prezime }}
                    </dd>
                </div>
                <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-500">
                        Pozicija
                    </dt>
                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                        {{ $radnik->pozicija }}
                    </dd>
                </div>
                <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-500">
                        Plata
                    </dt>
                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                        {{ $radnik->plata }}
                    </dd>
                </div>
                {{-- <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-500">
                        Nalog kreiran
                    </dt>
                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                        {{ $radnik->created_at->format('d.m.Y. H:i') }}
                    </dd>
                </div> --}}

                {{--     
    <h2>Podaci o radniku</h2>
    <p>Ime: <span>{{ $radnik->ime }}</span> </p>
    <p>Prezime: <span>{{ $radnik->prezime }}</span> </p>
    <p>Pozicija: <span>{{ $radnik->pozicija }}</span> </p>
    <p>Plata: <span>{{ $radnik->plata }}</span> </p>
    <p class="mt-6">
        <x-link-main href="/radnici/{{ $radnik->id }}/edit">Izmeni</x-link-main>
     </p> --}}
</x-layout>
