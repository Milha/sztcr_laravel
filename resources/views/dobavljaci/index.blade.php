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
                            <th class="font-inter px-4 py-2 border-b text-left">Naziv</th>
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
                                    <x-buttons.button-display
                                        href="{{ route('dobavljaci.show', $dobavljac->id) }}">Prikaži</x-buttons.button-display>
                                    <x-buttons.button-edit
                                        href="{{ route('dobavljaci.edit', $dobavljac->id) }}">Izmeni</x-buttons.button-edit>
                                    <form action="{{ route('dobavljaci.destroy', $dobavljac->id) }}" method="POST"
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
        <x-wide-link href="{{ route('dobavljaci.create') }}">Dodaj dobavljača</x-wide-link>
    </div>
</x-layout>
