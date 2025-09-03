<x-layout>
    <x-slot:heading>
        Svi korisnici
        {{-- <h1 class="text-2xl font-bold mb-6">Dobavljači</h1> --}}
    </x-slot:heading>

    <div class="container mx-auto p-6">

        <x-wide-link href="{{ route('korisnici.create') }}">Dodaj korisnika</x-wide-link>

        @if ($message = Session::get('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
                {{ $message }}
            </div>
        @endif

        @if ($korisnici->isEmpty())
            <p class="text-gray-500">Nema registrovanih dobavljača.</p>
        @else
            <div class="overflow-x-auto">
                <table class="min-w-full bg-white border border-gray-200">
                    <thead>
                        <tr>
                            <th class="px-4 py-2 border-b text-left">Naziv</th>
                            <th class="px-4 py-2 border-b text-left">Kontakt</th>
                            <th class="px-4 py-2 border-b text-center w-96">Akcije</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($korisnici as $korisnik)
                            <tr>
                                <td class="px-4 py-2 border-b">{{ $korisnik->ime }}</td>
                                <td class="px-4 py-2 border-b">{{ $korisnik->prezime }}</td>
                                <td class="px-4 py-2 border-b text-center w-96">
                                    <a href="{{ route('korisnici.show', $korisnik->id) }}"
                                        class="inline-block text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 rounded-lg text-sm px-5 py-2.5 me-2 mb-2 font-semibold">Prikaži</a>
                                    <a href="{{ route('korisnici.edit', $korisnik->id) }}"
                                        class="inline-block text-gray-900 bg-yellow-200 border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 rounded-lg text-sm px-5 py-2.5 me-2 mb-2 font-semibold ">Izmeni</a>
                                    <form action="{{ route('korisnici.destroy', $korisnik->id) }}" method="POST"
                                        class="inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            class="iinline-block text-gray-900 bg-red-300 border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-red-100 rounded-lg text-sm px-5 py-2.5 me-2 mb-2 font-semibold">Obriši</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endif
    </div>
</x-layout>
