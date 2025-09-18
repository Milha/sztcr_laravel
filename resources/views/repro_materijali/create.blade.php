<x-layout>
    <x-slot:heading>
        Kreiraj repromaterijal
    </x-slot:heading>

    <div class="container mx-auto my-8 p-6 bg-white rounded-lg shadow-lg w-full sm:w-4/5 lg:w-1/2">

        @if ($errors->any())
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                <strong class="font-bold">Greška!</strong> <span class="block sm:inline">Vas proverite unete
                    podatke!!!!</span>
                <ul class="mt-3 list-disc list-inside text-sm">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('repro_materijali.store') }}" method="POST">
            @csrf
            <div class="mb-5 form-group">
                <x-form-label-basic for="naziv">Naziv proizvoda:</x-form-label-basic>
                <input type="text" id="naziv" name="naziv"
                    class="form-control shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    placeholder="Unesite naziv proizvoda" value="{{ old('naziv') }}" required>
            </div>
            <div class="mb-5 form-group">
                <x-form-label-basic for="jedinica_mere">Jedinica mere:</x-form-label-basic>
                <input type="text" id="jedinica_mere" name="jedinica_mere"
                    class="form-control shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    placeholder="Unesite jedinicu mere proizvoda" value="{{ old('jedinica_mere') }}" required>
            </div>
            <div class="form-group">
                <x-form-label-basic for="cena">Cena:</x-form-label-basic>
                <input type="text" name="cena"
                    class="form-control shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    placeholder="Unesite cenu" value="{{ old('cena') }}" required>
            </div>
            <div class="form-group">
                <x-form-label-basic for="kolicina">Kolicina:</x-form-label-basic>
                <input type="number" name="kolicina"
                    class="form-control shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    placeholder="Unesite kolicinu" value="{{ old('kolicina') }}" required>
            </div>
            <div class="form-group">
                <x-form-label-basic for="magacin_id">Magacin id:</x-form-label-basic>
                <input type="number" name="magacin_id"
                    class="form-control shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    placeholder="Unesite cenu" value="{{ old('magacin_id') }}" required>
            </div>
            <x-button-potvrda type="submit">Sačuvaj</x-button-potvrda>
        </form>
    </div>

</x-layout>
