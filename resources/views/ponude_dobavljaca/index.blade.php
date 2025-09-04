<x-layout>
    <x-slot:heading>
        Sve ponude dobavljaca
    </x-slot:heading>

    <div class="container mx-auto p-6">


        <div class="space-y-4">
            <hr>
            @if ($ponude->isEmpty())
                <p class="text-gray-500">Nema registrovanih dobavljača.</p>
            @else
                <div class="overflow-x-auto">
                    <table class="min-w-full bg-white border border-gray-200">
                        <thead class="bg-gray-100">
                            <tr>
                                <th class="font-inter px-4 py-2 border-b text-left">Broj ponude</th>
                                <th class="font-inter px-4 py-2 border-b text-left">Naziv proizvoda</th>
                                <th class="font-inter px-4 py-2 border-b text-left">Kolicina</th>
                                <th class="font-inter px-4 py-2 border-b text-left">Cena</th>
                                <th class="px-4 py-2 border-b text-center w-96">Akcija</th>
                            </tr>
                        </thead>
                        <tbody class="bg-gray-50">
                            @foreach ($ponude as $ponuda)
                                <tr>
                                    <td class="px-4 py-2 border-b">{{ $ponuda->brojPonude }}</td>
                                    <td class="px-4 py-2 border-b">{{ $ponuda->nazivProizvoda }}</td>
                                    <td class="px-4 py-2 border-b">{{ $ponuda->kolicina }}</td>
                                    <td class="px-4 py-2 border-b">{{ $ponuda->cena }}</td>

                                    <td class="px-4 py-2 border-b text-center w-96">
                                        <x-buttons.button-display
                                            href="{{ route('ponude_dobavljaca.show', $ponuda->id) }}">Prikaži</x-buttons.button-display>
                                        <x-buttons.button-edit
                                            href="{{ route('ponude_dobavljaca.edit', $ponuda->id) }}">Izmeni</x-buttons.button-edit>
                                        <form action="{{ route('ponude_dobavljaca.destroy', $ponuda->id) }}"
                                            method="POST" class="inline">
                                            @csrf
                                            @method('DELETE')
                                            <x-buttons.button-delete type="submit">Obriši</x-buttons.button-delete>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>

                </div>
            @endif
            <x-wide-link href="/ponude_dobavljaca/create">Dodaj novu ponudu dobavljaca</x-wide-link>

        </div>
    </div>
</x-layout>
