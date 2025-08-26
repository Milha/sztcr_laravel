<x-layout>
    <x-slot:heading>
        <div class="container mx-auto p-6">
            <h2 class="text-2xl font-bold mb-6">Izmeni Dobavljača</h2>
        
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
        
            <form action="{{ route('dobavljaci.update', $dobavljac->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group mb-4">
                    <label for="naziv" class="block text-sm font-medium text-gray-700">Naziv</label>
                    <input type="text" name="naziv" id="naziv" class="form-input mt-1 block w-full" value="{{ $dobavljac->naziv }}">
                </div>
                <div class="form-group mb-4">
                    <label for="kontakt" class="block text-sm font-medium text-gray-700">Kontakt</label>
                    <input type="text" name="kontakt" id="kontakt" class="form-input mt-1 block w-full" value="{{ $dobavljac->kontakt }}">
                </div>
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Ažuriraj</button>
            </form>
        </div>
        
    </x-slot:heading>
</x-layout>



