<x-layout>
    <x-slot:heading>
        Kreirajte novog radnika
    </x-slot:heading>

    <div class="ontainer mx-auto my-8 p-6 bg-white rounded-lg shadow-lg w-full sm:w-4/5 lg:w-1/2">
        <h2>Dodaj novog radnika</h2>

        @if ($errors->any())
            <div class="alert alert-danger">
                <p class="text-red-600"><strong>Greška!</strong> Molimo Vas proverite unete podatke.</p>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li class="text-red-600">{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('radnici.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="ime" class="form-label block text-gray-700 text-sm font-bold mb-2">Ime:</label>
                <input type="text" name="ime"
                    class="form-control shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    placeholder="Unesite ime radnika" value="{{ old('ime') }}" required>
                @error('ime')
                    <p class="text-xs text-red-500 font-semibold mb-1">{{ 'Ime mora imati 3 i vise slova ' }} </p>
                @enderror
            </div>
            <div class="form-group">
                <label for="prezime" class="form-label block text-gray-700 text-sm font-bold mb-2">Prezime:</label>
                <input type="text" name="prezime" id="prezime"
                    class="form-control shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    placeholder="Unesite prezime radnika" value="{{ old('prezime') }}" required>
                @error('prezime')
                    <p class="text-xs text-red-500 font-semibold">{{ 'Prezime mora imati 3 i vise slova ' }} </p>
                @enderror
            </div>
            <div class="form-group">
                <label for="pozicija" class="form-label block text-gray-700 text-sm font-bold mb-2">Pozicija:</label>
                <input type="text" name="pozicija"
                    class="form-control shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    placeholder="Unesite poziciju radnika" value="{{ old('pozicija') }}" required>
            </div>
            <div class="form-group">
                <label for="plata" class="form-label block text-gray-700 text-sm font-bold mb-2">Plata:</label>
                <input type="text" step="0.01" name="plata"
                    class="form-control shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    placeholder="Unesite platu radnika" value="{{ old('plata') }}" required>
            </div>
            <div class="flex justify-between p-3">
                <x-buttons.button-back href="{{ route('korisnici.index') }}">
                    Nazad na listu korisnika
                </x-buttons.button-back>
                <x-buttons.button-update>Sačuvaj</x-buttons.button-update>
            </div>
        </form>
    </div>
</x-layout>
