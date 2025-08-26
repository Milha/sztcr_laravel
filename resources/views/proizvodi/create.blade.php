<x-layout>
    <x-slot:heading>
        Kreiraj proizvod
    </x-slot:heading>

    <div class="container mx-auto my-8 p-6 bg-white rounded-lg shadow-lg w-full sm:w-4/5 lg:w-1/2">
    
        @if ($errors->any())
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                <strong class="font-bold">Greška!</strong> <span class="block sm:inline">Vas proverite unete podatke!!!!</span>
                <ul class="mt-3 list-disc list-inside text-sm">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    
        <form action="{{ route('proizvodi.store') }}" method="POST">
            @csrf
            <div class="mb-5 form-group">
                <x-form-label-basic for="nazivProizvoda">Naziv proizvoda:</x-form-label-basic>
                <input type="text" id="nazivProizvoda"  name="nazivProizvoda" class="form-control shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"  placeholder="Unesite naziv proizvoda" value="{{ old('nazivProizvoda') }}" required>
            </div>
            {{-- <div class="form-group">
                <label for="nazivProizvoda">Naziv proizvoda:</label>
                <input type="text" name="nazivProizvoda" class="form-control" placeholder="Unesite naziv" value="{{ old('nazivProizvoda') }}">
            </div> --}}
            {{-- <div class="form-group">
                <label for="opis">Opis:</label>
                <input type="text" name="opis" class="form-control" placeholder="Unesite opis proizvoda" value="{{ old('opis') }}">
            </div> --}}
            <div class="form-group">
                <x-form-label-basic for="opis">Opis</x-form-label-basic>
                <textarea id="opis" name="opis" rows="4" class="form-control shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Unesite opis proizvoda" value="{{ old('opis') }}" ></textarea>

            </div>
            <div class="form-group">
                <x-form-label-basic for="cena">Cena:</x-form-label-basic>
                <input type="text" name="cena" class="form-control shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Unesite cenu" value="{{ old('cena') }}" required>
            </div>
            <div class="form-group">
                <x-form-label-basic for="kolicina">Kolicina:</x-form-label-basic>
                <input type="number" name="kolicina" class="form-control shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Unesite kolicinu" value="{{ old('kolicina') }}" required>
            </div>
            <div class="form-group">
                <x-form-label-basic for="magacin_id">Magacin id:</x-form-label-basic>
                <input type="number" name="magacin_id" class="form-control shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Unesite cenu" value="{{ old('magacin_id') }}" required>
            </div>
            <x-button-potvrda type="submit">Sačuvaj</x-button-potvrda>
        </form>
    </div>

</x-layout>