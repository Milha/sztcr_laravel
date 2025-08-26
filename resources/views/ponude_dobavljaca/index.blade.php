<x-layout>
    <x-slot:heading>
        Sve ponude dobavljaca
    </x-slot:heading>

    <div class="container mx-auto p-6">

        <x-wide-link href="/ponude_dobavljaca/create">Dodaj novu ponudu dobavljaca</x-wide-link>
        <div class="space-y-4">
            <hr>
            @if ($ponude->isEmpty())
                <p class="text-gray-500">Nema registrovanih dobavljača.</p>
            @else
                <div class="overflow-x-auto">
                    <table class="min-w-full bg-white border border-gray-200">
                        <thead>
                            <tr>
                                <th class="px-4 py-2 border-b text-left">Broj ponude</th>
                                <th class="px-4 py-2 border-b text-left">Naziv proizvoda</th>
                                <th class="px-4 py-2 border-b text-left">Kolicina</th>
                                <th class="px-4 py-2 border-b text-left">Cena</th>
                                <th class="px-4 py-2 border-b text-left">Akcija</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($ponude as $ponuda) 
                                <tr>
                                    <td class="px-4 py-2 border-b">{{ $ponuda->brojPonude}}</td>
                                    <td class="px-4 py-2 border-b">{{ $ponuda->nazivProizvoda}}</td>
                                    <td class="px-4 py-2 border-b">{{ $ponuda->kolicina}}</td>
                                    <td class="px-4 py-2 border-b">{{ $ponuda->cena}}</td>
                                    <td class="px-4 py-2 border-b"><x-link-main href="/ponude_dobavljaca/{{$ponuda->id}}">Detalji ponude</x-link-main></td>

                                </tr>
                            @endforeach
                            
                        </tbody>
                    </table>
                </div>
            @endif
            {{-- @foreach($ponude as $ponuda) 
                <p>Broj ponude:{{ $ponuda->brojPonude}}</p>
                <p>Naziv proizvoda: {{ $ponuda->nazivProizvoda}}</p>
                <p>
                    <x-link-main href="/ponude_dobavljaca/{{$ponuda->id}}">Detalji ponude</x-link-main>
                </p>
            @endforeach --}}
        </div>
    </div>
</x-layout>


