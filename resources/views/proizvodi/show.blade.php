<x-layout>
    <x-slot:heading>
        Pojedinacni proizvod
    </x-slot:heading>
    <div class="max-w-3xl mx-auto p-6 bg-white shadow-md rounded-lg">
            @if ($message = Session::get('success'))
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
                    {{ $message }}
                </div>
            @endif
        <div class="mb-4">
        <h2 class="text-2xl font-semibold mb-6 text-gray-800">Podaci o proizvodu</h2>
        <p class="text-gray-700 font-medium mb-1">Naziv proizvoda: <span>{{ $proizvod->nazivProizvoda }}</span> </p>
        <p class="text-gray-700 font-medium mb-1">Opis: <span>{{ $proizvod->opis }}</span> </p>
        <p class="text-gray-700 font-medium mb-1">Cena: <span>{{ $proizvod->cena }}</span> </p>
        <p class="text-gray-700 font-medium mb-1">Kolicina: <span>{{ $proizvod->kolicina }}</span> </p>
        <p class="text-gray-700 font-medium mb-1">Magacin: <span>{{ $proizvod->magacin->nazivMagacina }}</span> </p>
        <p class="mt-6">
            <x-link-main href="/proizvodi/{{ $proizvod->id }}/edit">Izmeni</x-link-main>
        </p>
        </div>
    </div>
</x-layout>


