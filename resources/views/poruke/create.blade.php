<x-layout>
    <x-slot:heading>
        Kreirajte novu poruku
    </x-slot:heading>

    <div class="container mx-auto my-8 p-6 bg-white rounded-lg shadow-lg w-full sm:w-4/5 lg:w-1/2">
        <h2 class="text-xl font-semibold text-gray-800 mb-4">Pošalji poruku administratoru</h2>

        @if ($errors->any())
            <div class="alert alert-danger mb-4">
                <p class="text-red-600 font-semibold">Greška! Molimo Vas proverite unete podatke.</p>
                <ul class="list-disc list-inside text-red-600">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('poruke.store') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="naslov" class="form-label block text-gray-700 text-sm font-bold mb-1 mt-4">Naslov
                    poruke:</label>
                <input type="text" name="naslov"
                    class="form-control shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    placeholder="Unesite naslov poruke" value="{{ old('naslov') }}" required>
            </div>

            <div class="form-group">
                <label for="sadrzaj" class="form-label block text-gray-700 text-sm font-bold mb-1 mt-4">Sadržaj
                    poruke:</label>
                <textarea name="sadrzaj" rows="5"
                    class="form-control shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    placeholder="Unesite sadržaj poruke..." required>{{ old('sadrzaj') }}</textarea>
            </div>

            <div class="flex justify-between p-3 mt-4">
                <x-buttons.button-back href="/">
                    Nazad na početnu
                </x-buttons.button-back>
                <x-buttons.button-update>Pošalji poruku</x-buttons.button-update>
            </div>
        </form>
    </div>

</x-layout>
