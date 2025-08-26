<x-layout>
    <x-slot:heading>
        <div class="container mx-auto p-6">
            <h2 class="text-2xl font-bold mb-6">Detalji Dobavljača</h2>
            <div class="card">
                <div class="card-header">
                    <h3>Nazvi dobavljac {{ $dobavljac->naziv }}</h3>
                </div>
                <div class="card-body">
                    <p><strong>Kontakt:</strong> {{ $dobavljac->kontakt }}</p>
                    <a href="{{ route('dobavljaci.index') }}" class="btn btn-secondary">Nazad</a>
                </div>
            </div>
        </div>
    </x-slot:heading>
</x-layout>


