<x-layout>
    <x-slot:heading>
        Dodaj Novog Dobavljača
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
    
        <form action="{{ route('dobavljaci.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <x-form-label-basic for="naziv">Naziv:</x-form-label-basic>
                <input type="text" name="naziv" class="form-control shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Unesite naziv dobavljača" value="{{ old('naziv') }}">
            </div>
            <div class="form-group">
                <x-form-label-basic for="kontakt">Kontakt:</x-form-label-basic>
                <input type="text" name="kontakt" class="form-control shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Unesite kontakt informacije" value="{{ old('kontakt') }}">
            </div>
            <x-button-potvrda>Sačuvaj</x-button-potvrda>
        </form>
    </div>
</x-layout>


