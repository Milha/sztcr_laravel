<x-layout>
    <x-slot:heading>
        Registruj se
    </x-slot:heading>

    <div class="ontainer mx-auto my-8 p-6 bg-white rounded-lg shadow-lg w-full sm:w-4/5 lg:w-1/2">
        
    
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
    
        <form action="/register" method="POST">
            @csrf
            <div class="form-group">
                <label for="ime" class="form-label block text-gray-700 text-sm font-bold mb-2">Ime:</label>
                <input type="text" name="ime" class="form-control shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" value="{{ old('ime') }}" required>
                @error('ime')
                    <p class="text-xs text-red-500 font-semibold mb-1">{{ "Ime mora imati 3 i vise slova "}} </p>
                @enderror
            </div>
            <div class="form-group">
                <label for="prezime" class="form-label block text-gray-700 text-sm font-bold mb-2">Prezime:</label>
                <input type="text" name="prezime" id="prezime" class="form-control shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" value="{{ old('prezime') }}" required>
                @error('prezime')
                    <p class="text-xs text-red-500 font-semibold">{{ "Prezime mora imati 3 i vise slova "}} </p>
                @enderror
            </div>
            <div class="form-group">
                <label for="email" class="form-label block text-gray-700 text-sm font-bold mb-2">Email:</label>
                <input type="email" name="email" class="form-control shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" value="{{ old('email') }}" required>
            </div>
            <div class="form-group">
                <label for="password" class="form-label block text-gray-700 text-sm font-bold mb-2">Password:</label>
                <input type="password" step="0.01" name="password" class="form-control shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" value="{{ old('password') }}" required>
            </div>
            <div class="form-group">
                <label for="password_confirmation" class="form-label block text-gray-700 text-sm font-bold mb-2">Potvrdite password:</label>
                <input type="password" step="0.01" name="password_confirmation" class="form-control shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" value="{{ old('password_confirmation') }}" required>
            </div>
            <div class="mt-6 flex items-center justify-end gap-x-6">
                <a href="/" class="text-sm font-semibold items-center leading-6 text-gray-900">Ponisti</a>
                <button type="submit" class="bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow mt-3">Registruj se</button>
            </div>
        </form>
    </div>

</x-layout>