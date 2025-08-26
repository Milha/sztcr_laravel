<x-layout>
    <x-slot:heading>
        Pojedinacni radnik
    </x-slot:heading>
    <h2>Podaci o radniku</h2>
    <p>Ime: <span>{{ $radnik->ime }}</span> </p>
    <p>Prezime: <span>{{ $radnik->prezime }}</span> </p>
    <p>Pozicija: <span>{{ $radnik->pozicija }}</span> </p>
    <p>Plata: <span>{{ $radnik->plata }}</span> </p>
    <p class="mt-6">
        <x-link-main href="/radnici/{{ $radnik->id }}/edit">Izmeni</x-link-main>
     </p>
</x-layout>


