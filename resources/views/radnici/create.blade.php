<x-layout>
    <x-slot:heading>
        Kreirajte novog radnika
    </x-slot:heading>

    <div class="ontainer mx-auto my-8 p-6 bg-white rounded-lg shadow-lg w-full sm:w-4/5 lg:w-1/2">
        <h2>Dodaj Novog Radnika</h2>
    
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
                <input type="text" name="ime" class="form-control shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Unesite ime radnika" value="{{ old('ime') }}" required>
                @error('ime')
                    <p class="text-xs text-red-500 font-semibold mb-1">{{ "Ime mora imati 3 i vise slova "}} </p>
                @enderror
            </div>
            <div class="form-group">
                <label for="prezime" class="form-label block text-gray-700 text-sm font-bold mb-2">Prezime:</label>
                <input type="text" name="prezime" id="prezime" class="form-control shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Unesite prezime radnika" value="{{ old('prezime') }}" required>
                @error('prezime')
                    <p class="text-xs text-red-500 font-semibold">{{ "Prezime mora imati 3 i vise slova "}} </p>
                @enderror
            </div>
            <div class="form-group">
                <label for="pozicija" class="form-label block text-gray-700 text-sm font-bold mb-2">Pozicija:</label>
                <input type="text" name="pozicija" class="form-control shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Unesite poziciju radnika" value="{{ old('pozicija') }}" required>
            </div>
            <div class="form-group">
                <label for="plata" class="form-label block text-gray-700 text-sm font-bold mb-2">Plata:</label>
                <input type="text" step="0.01" name="plata" class="form-control shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Unesite platu radnika" value="{{ old('plata') }}" required>
            </div>
            <button type="submit" class="bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow mt-3">Sačuvaj</button>
        </form>
    </div>

    {{-- <form method="POST" action="/radnici">
        @csrf

        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
                <h2 class="text-base font-semibold leading-7 text-gray-900">Create a New Job</h2>
                <p class="mt-1 text-sm leading-6 text-gray-600">We just need a handful of details from you.</p>

                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-4">
                        <label for="ime">Ime</label>

                        <div class="mt-2">
                            <input name="ime" id="ime" placeholder="CEO" />

                            <x-form-error name="ime" />
                        </div>
                    </div>

                    <div class="sm:col-span-4">
                        <label for="prezime">prezime</label>

                        <div class="mt-2">
                            <input name="prezime" id="prezime" placeholder="$50,000 USD" />

                            <x-form-error name="prezime" />
                        </div>
                    </div>

                    <div class="sm:col-span-4">
                        <label for="pozicija">pozicija</label>

                        <div class="mt-2">
                            <input name="pozicija" id="pozicija" placeholder="$50,000 USD" />

                            <x-form-error name="salary" />
                        </div>
                    </div>

                    <div class="sm:col-span-4">
                        <label for="plata">plata</label>

                        <div class="mt-2">
                            <input name="plata" id="plata" placeholder="$50,000 USD" />

                            <x-form-error name="plata" />
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-6 flex items-center justify-end gap-x-6">
            <button type="button" class="text-sm font-semibold leading-6 text-gray-900">Cancel</button>
            <x-form-button>Save</x-form-button>
        </div>
    </form> --}}
</x-layout>