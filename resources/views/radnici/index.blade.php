<x-layout>
    <x-slot:heading>
        Svi radnici
    </x-slot:heading>

    <div class="container mx-auto p-6">

        <hr>
        <div class="space-y-4">
            @if ($radnici->isEmpty())
                <p class="text-gray-500">Nema registrovanih radnika.</p>
            @else
                <div class="overflow-x-auto">
                    <table class="min-w-full bg-white border border-gray-200">
                        <thead class="bg-gray-100">
                            <tr>
                                <th class="font-inter px-4 py-2 border-b text-left">Ime</th>
                                <th class="font-inter px-4 py-2 border-b text-left">Prezime</th>
                                <th class="font-inter px-4 py-2 border-b text-left">Pozicija</th>
                                <th class="font-inter px-4 py-2 border-b text-left">Plata</th>
                                <th class="px-4 py-2 border-b text-center w-96">Akcije</th>
                            </tr>
                        </thead>
                        <tbody class="bg-gray-50">
                            @foreach ($radnici as $radnik)
                                <tr>
                                    <td class="px-4 py-2 border-b">{{ $radnik->ime }}</td>
                                    <td class="px-4 py-2 border-b">{{ $radnik->prezime }}</td>
                                    <td class="px-4 py-2 border-b">{{ $radnik->pozicija }}</td>
                                    <td class="px-4 py-2 border-b">{{ $radnik->plata }}</td>
                                    <td class="px-4 py-2 border-b text-center w-96"><x-buttons.button-display
                                            href="{{ route('radnici.show', $radnik->id) }}">Prikaži</x-buttons.button-display>
                                        <x-buttons.button-edit
                                            href="{{ route('radnici.edit', $radnik->id) }}">Izmeni</x-buttons.button-edit>
                                        <form action="{{ route('radnici.destroy', $radnik->id) }}" method="POST"
                                            class="inline">
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
            <x-wide-link href="/radnici/create">Dodaj Radnika</x-wide-link>

        </div>
    </div>
</x-layout>
