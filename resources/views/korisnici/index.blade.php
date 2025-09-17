<x-layout>
    <x-slot:heading>
        Svi korisnici
    </x-slot:heading>

    <div class="container mx-auto p-6">



        @if ($message = Session::get('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
                {{ $message }}
            </div>
        @endif

        @if ($korisnici->isEmpty())
            <p class="text-gray-500">Nema registrovanih korisnika.</p>
        @else
            <div class="overflow-x-auto">
                <table class="min-w-full bg-white border border-gray-200">
                    <thead class="bg-gray-100">
                        <tr>
                            <th class="font-inter px-4 py-2 border-b text-left">Ime</th>
                            <th class="px-4 py-2 border-b text-left">Prezime</th>
                            <th class="px-4 py-2 border-b text-left">Kontakt</th>
                            <th class="px-4 py-2 border-b text-left">Uloga</th>
                            <th class="px-4 py-2 border-b text-center w-96">Akcije</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($korisnici as $korisnik)
                            <tr class="bg-gray-50">
                                <td class="px-4 py-2 border-b">{{ $korisnik->ime }}</td>
                                <td class="px-4 py-2 border-b">{{ $korisnik->prezime }}</td>
                                <td class="px-4 py-2 border-b">{{ $korisnik->email }}</td>
                                <td class="px-4 py-2 border-b">{{ $korisnik->role }}</td>
                                <td class="px-4 py-2 border-b text-center w-96">
                                    <x-buttons.button-display
                                        href="{{ route('korisnici.show', $korisnik->id) }}">Prikaži</x-buttons.button-display>
                                    <x-buttons.button-edit
                                        href="{{ route('korisnici.edit', $korisnik->id) }}">Izmeni</x-buttons.button-edit>
                                    <form action="{{ route('korisnici.destroy', $korisnik->id) }}" method="POST"
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
                <div class="mt-6 flex justify-center bg-gray-50 p-1 rounded-md">
                    {{ $korisnici->links() }}
                </div>

            </div>
        @endif
        <x-wide-link href="{{ route('korisnici.create') }}">Dodaj korisnika</x-wide-link>

    </div>
</x-layout>
