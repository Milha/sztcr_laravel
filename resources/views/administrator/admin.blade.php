<x-layout>
    <x-slot:heading>
        <div class="container">
            <h2>Administrator strana</h2>
        </div>


    </x-slot:heading>
    <div class="container mx-auto mt-6">
        <div class="bg-white p-6 rounded shadow mb-6">
            <h3 class="text-2xl font-semibold mb-6">Posebne sekcije administratora:</h3>
            <div class="flex flex-col space-y-4">
                <x-basic-link href="/dobavljaci">Svi dobavljaci</x-basic-link>
                <x-basic-link href="/radnici">Svi radnici</x-basic-link>
                <x-basic-link href="/ponude_dobavljaca">Sve ponude dobavljaca</x-basic-link>
                <x-basic-link href="/proizvodi">Svi proizvodi</x-basic-link>
                <x-basic-link href="/korisnici">Svi korisnici</x-basic-link>

            </div>
        </div>
    </div>

</x-layout>
