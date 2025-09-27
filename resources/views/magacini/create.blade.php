<x-layout>
    <x-slot:heading>
        Dodaj novi magacin
    </x-slot:heading>
    <div class="container mx-auto my-8 p-6 bg-white rounded-lg shadow-lg w-full sm:w-4/5 lg:w-1/2">


        @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Greška!</strong> Molimo Vas proverite unete podatke.
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('magacini.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <x-form-label-basic for="nazivMagacina">Naziv magacina:</x-form-label-basic>
                <input type="text" name="nazivMagacina"
                    class="form-control shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    placeholder="Unesite naziv magacina" value="{{ old('nazivMagacina') }}">
            </div>
            <div class="form-group">
                <x-form-label-basic for="lokacija">Lokacija:</x-form-label-basic>
                <input type="text" name="lokacija"
                    class="form-control shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    placeholder="Unesite lokacija" value="{{ old('lokacija') }}">
            </div>
            {{-- <x-button-potvrda>Sačuvaj</x-button-potvrda> --}}
            <div class="flex justify-between p-3">
                <x-buttons.button-back href="{{ route('magacini.index') }}">
                    Nazad na listu magacina
                </x-buttons.button-back>
                <x-buttons.button-update>Sačuvaj</x-buttons.button-update>
            </div>
        </form>
    </div>
</x-layout>
