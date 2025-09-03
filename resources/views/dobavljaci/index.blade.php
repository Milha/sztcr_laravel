<x-layout>
    <x-slot:heading>
        Svi dobavljači
        {{-- <h1 class="text-2xl font-bold mb-6">Dobavljači</h1> --}}
    </x-slot:heading>

    <div class="container mx-auto p-6">



        @if ($message = Session::get('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
                {{ $message }}
            </div>
        @endif

        @if ($dobavljaci->isEmpty())
            <p class="text-gray-500">Nema registrovanih dobavljača.</p>
        @else
            <div class="overflow-x-auto">
                <table class="min-w-full bg-white border border-gray-200">
                    <thead class="bg-gray-100">
                        <tr>
                            <th class="px-4 py-2 border-b text-left">Naziv</th>
                            <th class="px-4 py-2 border-b text-left">Kontakt</th>
                            <th class="px-4 py-2 border-b text-center w-96">Akcije</th>
                        </tr>
                    </thead>
                    <tbody class="bg-gray-50">
                        @foreach ($dobavljaci as $dobavljac)
                            <tr>
                                <td class="px-4 py-2 border-b">{{ $dobavljac->naziv }}</td>
                                <td class="px-4 py-2 border-b">{{ $dobavljac->kontakt }}</td>
                                <td class="px-4 py-2 border-b text-center w-96">
                                    <a href="{{ route('dobavljaci.show', $dobavljac->id) }}"
                                        class="bg-blue-300 hover:bg-blue-600 text-gray-700 
                                        hover:text-gray-200 font-semibold px-4 py-2 rounded">Prikaži</a>
                                    <a href="{{ route('dobavljaci.edit', $dobavljac->id) }}"
                                        class="bg-yellow-300 hover:bg-yellow-500 text-gray-600 
                                        hover:text-gray-200  font-semibold px-4 py-2 rounded">Izmeni</a>
                                    <form action="{{ route('dobavljaci.destroy', $dobavljac->id) }}" method="POST"
                                        class="inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            class="bg-red-400 hover:bg-red-700 text-gray-600 
                                            hover:text-gray-200 
                                            font-semibold px-4 py-2 rounded">Obriši</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <x-wide-link href="{{ route('dobavljaci.create') }}">Dodaj dobavljača</x-wide-link>
            </div>
        @endif
    </div>
</x-layout>
