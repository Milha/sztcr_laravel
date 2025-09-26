<x-layout>
    <x-slot:heading>
        Svi proizvodi
    </x-slot:heading>

    <div class="container mx-auto p-6">
        <form method="GET" action="{{ route('proizvodi.index') }}"
            class="mb-6 flex flex-col sm:flex-row gap-4 items-start sm:items-center">
            <input type="text" name="search" value="{{ request('search') }}"
                placeholder="Pretraži proizvode po nazivu..."
                class="border border-gray-300 rounded px-4 py-2 w-full sm:w-1/2">
            <x-buttons.button-search type="submit" class="bg-amber-400 hover:bg-amber-500 text-black
">
                Pretraži
            </x-buttons.button-search>
        </form>

        @if ($message = Session::get('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
                {{ $message }}
            </div>
        @endif


        @if ($proizvodi->isEmpty())
            <p class="text-gray-500">Nema proizvoda na stanju.</p>
        @else
            <div class="overflow-x-auto">
                <table class="min-w-full bg-white border border-gray-200">
                    <thead class="bg-gray-100">
                        <tr>
                            <th class="font-lato px-4 py-2 border-b text-left">Naziv</th>
                            <th class="font-lato px-4 py-2 border-b text-left">Opis</th>
                            <th class="font-lato px-4 py-2 border-b text-left">Cena</th>
                            <th class="font-lato px-4 py-2 border-b text-left">Kolicina</th>
                            <th class="font-lato px-4 py-2 border-b text-left">Magacin</th>
                            <th class="font-lato px-4 py-2 border-b text-center w-96">Akcija</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($proizvodi as $proizvod)
                            <tr>
                                <td class="px-4 py-2 border-b">{{ $proizvod->nazivProizvoda }}</td>
                                <td class="px-4 py-2 border-b">{{ $proizvod->opis }}</td>
                                <td class="px-4 py-2 border-b">{{ $proizvod->cena }}</td>
                                <td class="px-4 py-2 border-b">{{ $proizvod->kolicina }}</td>
                                <td class="px-4 py-2 border-b">{{ $proizvod->magacin->nazivMagacina }}</td>
                                <td class="px-4 py-2 border-b text-center w-96"><x-buttons.button-display
                                        href="{{ route('proizvodi.show', $proizvod->id) }}">Prikaži</x-buttons.button-display>
                                    @can('admin-ili-radnik')
                                        <x-buttons.button-edit
                                            href="{{ route('proizvodi.edit', $proizvod->id) }}">Izmeni</x-buttons.button-edit>
                                        <form action="{{ route('proizvodi.destroy', $proizvod->id) }}" method="POST"
                                            class="inline">
                                            @csrf
                                            @method('DELETE')
                                            <x-buttons.button-delete type="submit">Obriši</x-buttons.button-delete>
                                        </form>
                                    @endcan

                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        @endif
        @can('admin-ili-radnik')
            <x-wide-link href="/proizvodi/create">Dodaj Proizvod</x-wide-link>
        @endcan
        <hr>
    </div>

    {{-- <div class="space-y-4">
        
        @foreach ($proizvodi as $proizvod) 
            <p>Naziv proizvoda:{{ $proizvod->nazivProizvoda}}</p>
            <p>Opis proizvoda: {{ $proizvod->opis}}</p>
            <p>Cena: {{ $proizvod->cena}}</p>
            <p>Kolicina: {{ $proizvod->kolicina}}</p>
            <p>Magacin: {{ $proizvod->magacin->nazivMagacina}}</p>
            <p>
                <x-link-main href="/proizvodi/{{$proizvod->id}}">Detalji proizvoda</x-link-main>
            </p>
        @endforeach
    </div> --}}
</x-layout>
