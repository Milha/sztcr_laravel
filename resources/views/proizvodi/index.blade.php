<x-layout>
    <x-slot:heading>
        Svi proizvodi
    </x-slot:heading>

    <div class="container mx-auto p-6">
        @if ($message = Session::get('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
                {{ $message }}
            </div>
        @endif

        @can('edit-radnik')
        <x-wide-link href="/proizvodi/create">Dodaj Proizvod</x-wide-link>
        <hr>
        @endcan

        @if  ($proizvodi->isEmpty())
            <p class="text-gray-500">Nema proizvoda na stanju.</p>
        @else 
            <div class="overflow-x-auto">
                <table class="min-w-full bg-white border border-gray-200">
                    <thead>
                        <tr>
                            <th class="px-4 py-2 border-b text-left">Naziv</th>
                            <th class="px-4 py-2 border-b text-left">Opis</th>
                            <th class="px-4 py-2 border-b text-left">Cena</th>
                            <th class="px-4 py-2 border-b text-left">Kolicina</th>
                            <th class="px-4 py-2 border-b text-left">Magacin</th>
                            <th class="px-4 py-2 border-b text-left">Akcija</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($proizvodi as $proizvod) 
                            <tr>
                                <td class="px-4 py-2 border-b">{{ $proizvod->nazivProizvoda}}</td>
                                <td class="px-4 py-2 border-b">{{ $proizvod->opis}}</td>
                                <td class="px-4 py-2 border-b">{{ $proizvod->cena}}</td>
                                <td class="px-4 py-2 border-b">{{ $proizvod->kolicina}}</td>
                                <td class="px-4 py-2 border-b">{{ $proizvod->magacin->nazivMagacina}}</td>
                                <td class="p-1"><x-link-main href="/proizvodi/{{$proizvod->id}}">Detalji proizvoda</x-link-main></td>
                            </tr>
                         @endforeach
                    </tbody>
                </table>
            </div>
        @endif
    </div>
    
    {{-- <div class="space-y-4">
        
        @foreach($proizvodi as $proizvod) 
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


