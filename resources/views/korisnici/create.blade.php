<x-layout>
    <x-slot:heading>
        Dodaj novog korisnika
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

        <form action="{{ route('korisnici.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <x-form-label-basic for="ime">Ime:</x-form-label-basic>
                <input type="text" name="ime"
                    class="form-control shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    placeholder="Unesite ime korisnika" value="{{ old('ime') }}">
            </div>
            <div class="form-group">
                <x-form-label-basic for="prezime">Prezime:</x-form-label-basic>
                <input type="text" name="prezime"
                    class="form-control shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    placeholder="Unesite prezime korisnika" value="{{ old('prezime') }}">
            </div>
            <div class="form-group">
                <x-form-label-basic for="email">Email:</x-form-label-basic>
                <input type="text" name="email"
                    class="form-control shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    placeholder="Unesite email adresu" value="{{ old('email') }}">
            </div>
            <div class="form-group">
                <x-form-label-basic for="role">Uloga:</x-form-label-basic>
                <select name="role" id="role" class="form-select mt-1 block w-full bg-gray-100 p-2">
                    <option value="dobavljac">Dobavljač</option>
                    <option value="user">User</option>
                    <option value="radnik">Radnik</option>
                </select>
            </div>
            <div class="form-group">
                <x-form-label-basic for="password">Password:</x-form-label-basic>
                <input type="text" name="password"
                    class="form-control shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    placeholder="Unesite password">
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
