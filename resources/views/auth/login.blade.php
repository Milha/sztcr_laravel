<x-layout>
    <x-slot:heading>
        Loguj te se
    </x-slot:heading>

    <div class="container mx-auto my-8 p-6 bg-white rounded-lg shadow-lg w-full sm:w-4/5 lg:w-1/2">
        
    
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
    
        <form action="/login" method="POST">
            @csrf
            
            <div class="form-group">
                <x-form-label-basic for="email">Email:</x-form-label-basic>
                <input type="email" name="email" class="form-control shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" value="{{ old('email') }}" required>
            </div>
            <div class="form-group">
                <x-form-label-basic for="password">Password:</x-form-label-basic>
                <input type="password" step="0.01" name="password" class="form-control shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"  required>
                {{-- value="{{ old('password') }}" --}}
            </div>
            
            <div class="mt-6 flex items-center justify-end gap-x-6">
                <a href="/" class="text-sm font-semibold items-center leading-6 text-gray-900">Ponisti</a>
                <x-button-potvrda>Uloguj se</x-button-potvrda>
            </div>
        </form>
    </div>

</x-layout>