<x-layout>
    <x-slot:heading>
        <div class="container mx-auto p-6">
            <h2 class="text-2xl font-bold mb-6">Detalji korisnika</h2>
            <div class="card">
                <div class="card-header">
                    <h3>Ime: {{ $korisnik->ime }}</h3>
                </div>
                <div class="card-body">
                    <p><strong>Email:</strong> {{ $korisnik->email }}</p>
                    <a href="{{ route('korisnici.index') }}" class="btn btn-secondary">Nazad</a>
                </div>
            </div>
        </div>
    </x-slot:heading>
</x-layout>
