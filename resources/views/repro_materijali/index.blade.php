<x-layout>
    <x-slot:heading>
        Svi repromaterijali
    </x-slot:heading>

    <div class="container mx-auto p-6">
        @if ($message = Session::get('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
                {{ $message }}
            </div>
        @endif


        @if ($materijali->isEmpty())
            <p class="text-gray-500">Nema proizvoda na stanju.</p>
        @else
            <div class="overflow-x-auto">
                <table class="min-w-full bg-white border border-gray-200">
                    <thead class="bg-gray-100">
                        <tr>
                            <th class="font-lato px-4 py-2 border-b text-left">Naziv</th>
                            <th class="font-lato px-4 py-2 border-b text-left">Cena</th>
                            <th class="font-lato px-4 py-2 border-b text-left">Kolicina</th>
                            <th class="font-lato px-4 py-2 border-b text-left">Magacin</th>
                            <th class="font-lato px-4 py-2 border-b text-center w-96">Akcija</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($materijali as $repromaterijal)
                            <tr>
                                <td class="px-4 py-2 border-b">{{ $repromaterijal->naziv }}</td>
                                <td class="px-4 py-2 border-b">{{ $repromaterijal->cena }}</td>
                                <td class="px-4 py-2 border-b">{{ $repromaterijal->kolicina }}</td>
                                <td class="px-4 py-2 border-b">{{ $repromaterijal->magacin->nazivMagacina }}</td>
                                <td class="px-4 py-2 border-b text-center w-96"><x-buttons.button-display
                                        href="{{ route('repro_materijali.show', $repromaterijal->id) }}">Prikaži</x-buttons.button-display>
                                    @can('admin-ili-radnik')
                                        <x-buttons.button-edit
                                            href="{{ route('repro_materijali.edit', $repromaterijal->id) }}">Izmeni</x-buttons.button-edit>
                                        <form action="{{ route('repro_materijali.destroy', $repromaterijal->id) }}"
                                            method="POST" class="inline">
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
            <x-wide-link href="/repro_materijali/create">Dodaj Repromaterijal</x-wide-link>
        @endcan
        <hr>
    </div>


</x-layout>
