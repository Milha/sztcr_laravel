<x-layout>
    <x-slot:heading>
        {{-- <div class="container mx-auto p-6">
            <h2 class="text-2xl font-bold mb-6">Detalji korisnika</h2>

        </div> --}}

        <div class="container">
            <h2>Detalji korisnika</h2>

        </div>
    </x-slot:heading>
    <div class="bg-white overflow-hidden shadow rounded-lg border">
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
                        Puno ime
                    </dt>
                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                        {{ $korisnik->ime }} {{ $korisnik->prezime }}
                    </dd>
                </div>
                <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-500">
                        Email adresa
                    </dt>
                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                        {{ $korisnik->email }}
                    </dd>
                </div>
                <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-500">
                        Nalog kreiran
                    </dt>
                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                        {{ $korisnik->created_at->format('d.m.Y. H:i') }}
                    </dd>
                </div>
                {{-- <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-500">
                        Address
                    </dt>
                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                        123 Main St<br>
                        Anytown, USA 12345
                    </dd>
                </div> --}}
            </dl>
        </div>
    </div>

    {{-- <div class="card">
        <div class="card-header">
            <h3>Ime: {{ $korisnik->ime }}</h3>
        </div>
        <div class="card-body">
            <p><strong>Email:</strong> {{ $korisnik->email }}</p>
            <a href="{{ route('korisnici.index') }}" class="btn btn-secondary">Nazad</a>
        </div>
    </div> --}}
</x-layout>
