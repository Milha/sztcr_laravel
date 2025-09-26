<x-layout>
    <x-slot:heading>
        Izmeni podatke o magacinu
    </x-slot:heading>
    <div class="bg-white overflow-hidden shadow rounded-lg border">


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

        <form action="{{ route('magacini.update', $magacin->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="bg-white overflow-hidden shadow rounded-lg border">
                <div class="border-t border-gray-200 px-4 py-5 sm:p-0">
                    <div class="sm:divide-y sm:divide-gray-200">
                        <x-forms.form-group>
                            <x-forms.form-label-container>
                                <label for="nazivMagacina" class="block text-sm font-medium text-gray-700">Naziv magacina
                                    magacina</label>
                            </x-forms.form-label-container>
                            <x-forms.form-input-container>
                                <input type="text" name="nazivMagacina" id="nazivMagacina"
                                    class="form-input mt-1 block w-full" value="{{ $magacin->nazivMagacina }}">
                            </x-forms.form-input-container>
                        </x-forms.form-group>
                        <x-forms.form-group>
                            <x-forms.form-label-container>
                                <label for="lokacija" class="block text-sm font-medium text-gray-700">Lokacija</label>
                            </x-forms.form-label-container>
                            <x-forms.form-input-container>
                                <input type="text" name="lokacija" id="lokacija"
                                    class="form-input mt-1 block w-full" value="{{ $magacin->lokacija }}">
                            </x-forms.form-input-container>
                        </x-forms.form-group>
                    </div>
                </div>
            </div>
            <x-buttons.button-update type="submit">Ažuriraj</x-buttons.button-update>
        </form>
    </div>
</x-layout>
