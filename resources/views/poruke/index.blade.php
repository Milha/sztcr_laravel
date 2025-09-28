<x-layout>
    <x-slot:heading>
        Sve poruke
    </x-slot:heading>

    <div class="container mx-auto p-6">

        <hr>
        <div class="space-y-4">
            <form method="GET" action="{{ route('poruke.index') }}"
                class="mb-6 flex flex-col sm:flex-row gap-4 items-start sm:items-center">
                <input type="text" name="search" value="{{ request('search') }}"
                    placeholder="Pretraži poruke po naslovu..."
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
            @if ($poruke->isEmpty())
                <p class="text-gray-500">Trenunto nema primljenih poruka.</p>
            @else
                <div class="overflow-x-auto">
                    <table class="min-w-full bg-white border border-gray-200">
                        <thead class="bg-gray-100">
                            <tr>
                                <th class="font-inter px-4 py-2 border-b text-left">Posiljalac</th>
                                <th class="font-inter px-4 py-2 border-b text-left">Naslov</th>
                                <th class="font-inter px-4 py-2 border-b text-left">Obradjeno</th>
                                <th class="font-inter px-4 py-2 border-b text-left">Vreme</th>
                                <th class="px-4 py-2 border-b text-center w-96">Akcije</th>
                            </tr>
                        </thead>
                        <tbody class="bg-gray-50">
                            @foreach ($poruke as $poruka)
                                <tr>
                                    <td class="px-4 py-2 border-b">{{ $poruka->posiljalac->ime }}</td>
                                    <td class="px-4 py-2 border-b">{{ $poruka->naslov }}</td>
                                    <td class="px-4 py-2 border-b">
                                        {{ $poruka->procitana ? 'Obradjeno' : 'Neobradjeno' }}</td>
                                    <td class="px-4 py-2 border-b">{{ $poruka->created_at }}</td>
                                    <td class="px-4 py-2 border-b text-center w-96"><x-buttons.button-display
                                            href="{{ route('poruke.show', $poruka->id) }}">Prikaži</x-buttons.button-display>
                                        <x-buttons.button-edit
                                            href="{{ route('poruke.edit', $poruka->id) }}">Izmeni</x-buttons.button-edit>
                                        <form action="{{ route('poruke.destroy', $poruka->id) }}" method="POST"
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
            <x-wide-link href="/poruke/create">Dodaj Poruku</x-wide-link>

        </div>
    </div>
</x-layout>
