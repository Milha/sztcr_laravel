<x-layout>
    <x-slot:heading>
        Svi magacini

    </x-slot:heading>

    <div class="container mx-auto p-6">

        <form method="GET" action="{{ route('magacini.index') }}"
            class="mb-6 flex flex-col sm:flex-row gap-4 items-start sm:items-center">
            <input type="text" name="search" value="{{ request('search') }}"
                placeholder="Pretraži magacine po nazivu..."
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

        @if ($magacini->isEmpty())
            <p class="text-gray-500">Nema registrovanih magacina.</p>
        @else
            <div class="overflow-x-auto">
                <table class="min-w-full bg-white border border-gray-200">
                    <thead class="bg-gray-100">
                        <tr>
                            <th class="px-4 py-2 border-b text-left">Naziv magacina</th>
                            <th class="px-4 py-2 border-b text-left">Lokacija</th>
                            <th class="px-4 py-2 border-b text-center w-96">Akcije</th>
                        </tr>
                    </thead>
                    <tbody class="bg-gray-50">
                        @foreach ($magacini as $magacin)
                            <tr>
                                <td class="px-4 py-2 border-b">{{ $magacin->nazivMagacina }}</td>
                                <td class="px-4 py-2 border-b">{{ $magacin->lokacija }}</td>
                                <td class="px-4 py-2 border-b text-center w-96">
                                    <x-buttons.button-display
                                        href="{{ route('magacini.show', $magacin->id) }}">Prikaži</x-buttons.button-display>
                                    <x-buttons.button-edit
                                        href="{{ route('magacini.edit', $magacin->id) }}">Izmeni</x-buttons.button-edit>
                                    <form action="{{ route('magacini.destroy', $magacin->id) }}" method="POST"
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
        <x-wide-link href="{{ route('magacini.create') }}">Dodaj magacin</x-wide-link>
    </div>
</x-layout>
