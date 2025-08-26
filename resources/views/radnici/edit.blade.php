<x-layout>
    <x-slot name="heading">
        <div class="container mx-auto p-6">
            <h2 class="text-2xl font-bold mb-6">Izmeni podatke Radnika</h2>
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

        <form action="{{ route('radnici.update', $radnik->id) }}" method="POST" class="w-full max-w-lg">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label for="ime" class="block text-gray-700 text-sm font-bold mb-2">Ime:</label>
                <input type="text" name="ime" id="ime" value="{{ old('ime', $radnik->ime) }}"
                       class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                       placeholder="Unesite ime radnika">
            </div>

            <div class="mb-4">
                <label for="prezime" class="block text-gray-700 text-sm font-bold mb-2">Prezime:</label>
                <input type="text" name="prezime" id="prezime" value="{{ old('prezime', $radnik->prezime) }}"
                       class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                       placeholder="Unesite prezime radnika">
            </div>

            <div class="mb-4">
                <label for="pozicija" class="block text-gray-700 text-sm font-bold mb-2">Pozicija:</label>
                <input type="text" name="pozicija" id="pozicija" value="{{ old('pozicija', $radnik->pozicija) }}"
                       class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                       placeholder="Unesite poziciju radnika">
            </div>

            <div class="mb-4">
                <label for="plata" class="block text-gray-700 text-sm font-bold mb-2">Plata:</label>
                <input type="text" name="plata" id="plata" value="{{ old('plata', $radnik->plata) }}"
                       class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                       placeholder="Unesite platu radnika">
            </div>

            <div class="flex items-center justify-between">
                <a href="{{ route('radnici.index') }}" class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800">
                    Nazad na listu radnika
                </a>
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                    Sačuvaj Izmene
                </button>
                <button form="delete-form" type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                    Obrisi ponudu proizvoda
                </button>
            </div>
        </form>
    </div>
    <form method="POST" action="/radnici/{{ $radnik->id }}" id="delete-form" class="hidden">
        @csrf
        @method('DELETE')
    </form>
</x-layout>
