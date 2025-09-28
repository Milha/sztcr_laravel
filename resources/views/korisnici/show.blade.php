<x-layout>
    <x-slot:meta>
        <title>Prikaz {{ $korisnik->ime }} | SZTR</title>
        <meta name="description" content="Informacije o korisniku {{ $korisnik->ime }} koji sarađuje sa SZTR.">
        <meta name="keywords" content="korisniku, SZTR, saradnja, nabavka">
        <meta name="robots" content="index, follow">
    </x-slot:meta>
    <x-slot:heading>
        <div class="container">
            <h2>Detalji korisnika</h2>
        </div>
    </x-slot:heading>
    <div class="container mx-auto p-6 bg-white overflow-hidden shadow rounded-lg border">
        {{-- <div class="px-4 py-5 sm:px-6">
            <h3 class="text-lg leading-6 font-medium text-gray-900">
                Radnik:
            </h3>
        </div> --}}
        <div class="px-4 py-5 sm:px-6">
            <h3 class="text-lg leading-6 font-medium text-gray-900">
                {{ $korisnik->ime }}
            </h3>
            <p class="mt-1 max-w-2xl text-sm text-gray-500">
                Korisnik je u ulozi: {{ $korisnik->role }}.
            </p>
        </div>
        <div class="border-t border-gray-200 px-4 py-5 sm:p-0">
            <dl class="sm:divide-y sm:divide-gray-200">
                <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-500">
                        Puno ime:
                    </dt>
                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                        {{ $korisnik->ime }} {{ $korisnik->prezime }}
                    </dd>
                </div>
                <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-500">
                        Email adresa:
                    </dt>
                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                        {{ $korisnik->email }}
                    </dd>
                </div>
                <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-500">
                        Nalog kreiran:
                    </dt>
                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                        {{ $korisnik->created_at->format('d.m.Y. H:i') }}
                    </dd>
                </div>

            </dl>
            <div class="flex justify-between p-3">
                <x-buttons.button-back href="{{ route('korisnici.index') }}">
                    Nazad na listu korisnika
                </x-buttons.button-back>
            </div>
        </div>
    </div>


</x-layout>
