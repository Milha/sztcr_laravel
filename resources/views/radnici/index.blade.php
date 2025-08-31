<x-layout>
    <x-slot:heading>
        Svi radnici
    </x-slot:heading>

    <div class="container mx-auto p-6">
        <x-wide-link href="/radnici/create">Dodaj Radnika</x-wide-link>
        <hr>
        <div class="space-y-4">
            @if ($radnici->isEmpty())
                <p class="text-gray-500">Nema registrovanih radnika.</p>
            @else
                <div class="overflow-x-auto">
                    <table class="min-w-full bg-white border border-gray-200">
                        <thead>
                            <tr>
                                <th class="px-4 py-2 border-b text-left">Ime</th>
                                <th class="px-4 py-2 border-b text-left">Prezime</th>
                                <th class="px-4 py-2 border-b text-left">Pozicija</th>
                                <th class="px-4 py-2 border-b text-left">Plata</th>
                                <th class="px-4 py-2 border-b text-left">Akcije</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($radnici as $radnik)
                                <tr>
                                    <td class="px-4 py-2 border-b">{{ $radnik->ime }}</td>
                                    <td class="px-4 py-2 border-b">{{ $radnik->prezime }}</td>
                                    <td class="px-4 py-2 border-b">{{ $radnik->pozicija }}</td>
                                    <td class="px-4 py-2 border-b">{{ $radnik->plata }}</td>
                                    <td class="px-4 py-2 border-b"><x-link-main
                                            href="/radnici/{{ $radnik->id }}">Detalji radnika</x-link-main></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @endif

        </div>
    </div>
</x-layout>
