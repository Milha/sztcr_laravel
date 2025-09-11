<x-layout>
    <x-slot:heading>
        Izmeni Dobavljača
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

        <form action="{{ route('dobavljaci.update', $dobavljac->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="bg-white overflow-hidden shadow rounded-lg border">
                <div class="border-t border-gray-200 px-4 py-5 sm:p-0">
                    <div class="sm:divide-y sm:divide-gray-200">
                        <x-forms.form-group>
                            <x-forms.form-label-container>
                                <label for="naziv" class="block text-sm font-medium text-gray-700">Naziv</label>
                            </x-forms.form-label-container>
                            <x-forms.form-input-container>
                                <input type="text" name="naziv" id="naziv" class="form-input mt-1 block w-full"
                                    value="{{ $dobavljac->naziv }}">
                            </x-forms.form-input-container>
                        </x-forms.form-group>
                        <x-forms.form-group>
                            <x-forms.form-label-container>
                                <label for="kontakt" class="block text-sm font-medium text-gray-700">Kontakt</label>
                            </x-forms.form-label-container>
                            <x-forms.form-input-container>
                                <input type="text" name="kontakt" id="kontakt" class="form-input mt-1 block w-full"
                                    value="{{ $dobavljac->kontakt }}">
                            </x-forms.form-input-container>
                        </x-forms.form-group>
                    </div>
                </div>
            </div>
            <x-buttons.button-update type="submit">Ažuriraj</x-buttons.button-update>
        </form>
    </div>
</x-layout>
