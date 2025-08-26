<x-layout>
    <x-slot name="heading">
        <div class="container mx-auto p-6">
            <h2 class="text-2xl font-bold mb-6">Izmeni Podatke Ponude</h2>
        </div>
    </x-slot>

    <div class="container mx-auto p-6">
        @if ($errors->any())
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-6">
                <strong>Greška!</strong> Molimo vas da proverite unete podatke.
                <ul class="mt-3 list-disc list-inside">
                    @foreach ($errors->all() as $error)
                        <li class="text-sm">{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('ponude_dobavljaca.update', $ponuda->id) }}" method="POST" class="w-full max-w-lg">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label for="brojPonude" class="block text-gray-700 text-sm font-bold mb-2">brojPonude:</label>
                <input type="text" name="brojPonude" id="brojPonude" value="{{ old('brojPonude', $ponuda->brojPonude) }}"
                       class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                       placeholder="Unesite ime radnika">
            </div>

            <div class="mb-4">
                <label for="nazivProizvoda" class="block text-gray-700 text-sm font-bold mb-2">nazivProizvoda:</label>
                <input type="text" name="nazivProizvoda" id="nazivProizvoda" value="{{ old('nazivProizvoda', $ponuda->nazivProizvoda) }}"
                       class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                       placeholder="Unesite prezime radnika">
            </div>

            <div class="mb-4">
                <label for="kolicina" class="block text-gray-700 text-sm font-bold mb-2">kolicina:</label>
                <input type="text" name="kolicina" id="kolicina" value="{{ old('kolicina', $ponuda->kolicina) }}"
                       class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                       placeholder="Unesite poziciju radnika">
            </div>

            <div class="mb-4">
                <label for="cena" class="block text-gray-700 text-sm font-bold mb-2">cena:</label>
                <input type="number" step="0.01" name="cena" id="cena" value="{{ old('cena', $ponuda->cena) }}"
                       class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                       placeholder="Unesite platu radnika">
            </div>
            <div class="mb-4">
                <label for="dobavljac_id" class="block text-gray-700 text-sm font-bold mb-2">dobavljac_id:</label>
                <input type="number" step="0.01" name="dobavljac_id" id="dobavljac_id" value="{{ old('dobavljac_id', $ponuda->dobavljac_id) }}"
                       class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                       placeholder="Unesite platu radnika">
            </div>

            <div class="flex items-center justify-between">
                <a href="{{ route('ponude_dobavljaca.index') }}" class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800">
                    Nazad na listu ponuda
                </a>
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                    Sačuvaj Izmene
                </button>
                <button form="delete-form" type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                    Obrisi radnika
                </button>
            </div>
        </form>
    </div>
    <form method="POST" action="/ponude_dobavljaca/{{ $ponuda->id }}" id="delete-form" class="hidden">
        @csrf
        @method('DELETE')
    </form>
</x-layout>
