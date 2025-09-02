<x-layout>
    <x-slot:heading>
        <div class="container mx-auto p-6">
            <h2 class="text-2xl font-bold mb-6">Izmeni podatke korisnika</h2>

            @if ($errors->any())
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
                    <strong>Greška!</strong> Molimo Vas proverite unete podatke.
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('korisnici.update', $korisnik->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group mb-4">
                    <label for="ime" class="block text-sm font-medium text-gray-700">Ime</label>
                    <input type="text" name="ime" id="ime" class="form-input mt-1 block w-full"
                        value="{{ $korisnik->ime }}">
                </div>
                <div class="form-group mb-4">
                    <label for="prezime" class="block text-sm font-medium text-gray-700">prezime</label>
                    <input type="text" name="prezime" id="prezime" class="form-input mt-1 block w-full"
                        value="{{ $korisnik->prezime }}">
                </div>
                <div class="form-group mb-4">
                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                    <input type="text" name="email" id="email" class="form-input mt-1 block w-full"
                        value="{{ $korisnik->email }}">
                </div>
                <div class="form-group mb-4">
                    <label for="kontakt" class="block text-sm font-medium text-gray-700">Kontakt</label>
                    <input type="text" name="kontakt" id="kontakt" class="form-input mt-1 block w-full"
                        value="{{ $korisnik->kontakt }}">
                </div>
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Ažuriraj</button>
            </form>
        </div>

    </x-slot:heading>
</x-layout>
