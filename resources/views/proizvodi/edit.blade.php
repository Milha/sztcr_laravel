<x-layout>
    <x-slot name="heading">
        Izmeni podatke proizvoda
    </x-slot>

    <div class="container mx-auto my-8 p-6 bg-white rounded-lg shadow-lg w-full sm:w-4/5 lg:w-1/2">
        <h2 class="text-2xl font-bold mb-6">Izmeni Podatke Proizvoda</h2>
        @if ($errors->any())
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-6">
                <strong>Greška!</strong> Molimo vas da proverite unete podatke.
                <ul class="mt-3 list-disc list-inside">
                    @foreach ($errors->all() as $error)
                        <li class="text-sm">{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('proizvodi.update', $proizvod->id) }}" method="POST" class="w-full max-w-lg">
            @csrf
            @method('PUT')
            <div class="bg-white overflow-hidden shadow rounded-lg border">
                <div class="border-t border-gray-200 px-4 py-5 sm:p-0">
                    <div class="sm:divide-y sm:divide-gray-200">
                        <x-forms.form-group>
                            <x-forms.form-label-container>
                                <label for="nazivProizvoda" class="block text-sm font-medium text-gray-700">Naziv
                                    proizvoda</label>
                            </x-forms.form-label-container>
                            <x-forms.form-input-container>
                                <input type="text" name="nazivProizvoda" id="nazivProizvoda"
                                    class="form-input mt-1 block w-full" value="{{ $proizvod->nazivProizvoda }}">
                            </x-forms.form-input-container>
                        </x-forms.form-group>
                        <x-forms.form-group class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <x-forms.form-label-container class="text-sm font-medium text-gray-500">
                                <label for="opis" class="block text-sm font-medium text-gray-700">Opis</label>
                            </x-forms.form-label-container>
                            <x-forms.form-input-container class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                <input type="text" name="opis" id="opis" class="form-input mt-1 block w-full"
                                    value="{{ $proizvod->opis }}">
                            </x-forms.form-input-container>
                        </x-forms.form-group>
                        <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <x-forms.form-label-container class="text-sm font-medium text-gray-500">
                                <label for="cena" class="block text-sm font-medium text-gray-700">Cena</label>
                            </x-forms.form-label-container>
                            <x-forms.form-input-container class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                <input type="text" name="cena" id="cena" class="form-input mt-1 block w-full"
                                    value="{{ $proizvod->cena }}">
                            </x-forms.form-input-container>
                        </div>
                        <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <x-forms.form-label-container class="text-sm font-medium text-gray-500">
                                <label for="kolicina" class="block text-sm font-medium text-gray-700">Kolicina</label>
                            </x-forms.form-label-container>
                            <x-forms.form-input-container class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                <input type="text" name="kolicina" id="kolicina"
                                    class="form-input mt-1 block w-full" value="{{ $proizvod->kolicina }}">
                            </x-forms.form-input-container>
                        </div>
                        <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <x-forms.form-label-container class="text-sm font-medium text-gray-500">
                                <label for="magacin" class="block text-sm font-medium text-gray-700">magacin</label>
                            </x-forms.form-label-container>
                            <x-forms.form-input-container class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                {{-- <input type="text" name="magacin_id" id="magacin"
                                    class="form-input mt-1 block w-full" value="{{ $proizvod->magacin->magacin_id }}"> --}}
                                <select name="magacin_id" id="magacin_id" class="form-select mt-1 block w-full">
                                    @foreach ($magacini as $magacin)
                                        <option value="{{ $magacin->id }}"
                                            {{ $proizvod->magacin_id == $magacin->id ? 'selected' : '' }}>
                                            {{ $magacin->nazivMagacina }}
                                        </option>
                                    @endforeach
                                </select>
                            </x-forms.form-input-container>
                        </div>

                    </div>
                </div>
            </div>
            {{-- <div class="mb-4">
                <label for="ime" class="block text-gray-700 text-sm font-bold mb-2">Ime:</label>
                <input type="text" name="nazivProizvoda" id="nazivProizvoda"
                    value="{{ old('nazivProizvoda', $proizvod->nazivProizvoda) }}"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    placeholder="Unesite nazivProizvoda proizvoda">
            </div>

            <div class="mb-4">
                <label for="opis" class="block mb-2  font-medium text-gray-900">Opis</label>
                <textarea id="opis" name="opis" rows="4"
                    class="block p-2.5 w-full text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 "
                    placeholder="Unesite opis proizvoda" value="{{ old('opis') }}"></textarea>

            </div>

            <div class="mb-4">
                <label for="cena" class="block text-gray-700 text-sm font-bold mb-2">Cena:</label>
                <input type="number" name="cena" id="cena" value="{{ old('cena', $proizvod->cena) }}"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    placeholder="Unesite kolicinu proizvoda">
            </div>

            <div class="mb-4">
                <label for="kolicina" class="block text-gray-700 text-sm font-bold mb-2">kolicina:</label>
                <input type="number" step="0.01" name="kolicina" id="kolicina"
                    value="{{ old('kolicina', $proizvod->kolicina) }}"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    placeholder="Unesite platu proizvoda">
            </div>

            <div class="mb-4">
                <label for="magacin_id" class="block text-gray-700 text-sm font-bold mb-2">magacin_id:</label>
                <input type="number" step="0.01" name="magacin_id" id="magacin_id"
                    value="{{ old('magacin_id', $proizvod->magacin_id) }}"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    placeholder="Unesite magacin ID">
            </div> --}}

            <div class="flex items-center justify-between">
                <a href="{{ route('proizvodi.index') }}"
                    class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800">
                    Nazad na listu proizvoda
                </a>
                <x-button-potvrda type="submit">
                    Sačuvaj Izmene
                </x-button-potvrda>
                <x-button-potvrda form="delete-form" type="submit">
                    Obrisi ponudu proizvoda
                </x-button-potvrda>
            </div>
        </form>
    </div>
    <div
        class="flex flex-wrap gap-3 justify-start sm:justify-center lg:justify-between px-4 py-4 bg-white rounded-lg shadow">
        <x-buttons.button-back href="{{ route('proizvodi.index') }}">
            Nazad na listu proizvoda
        </x-buttons.button-back>
        <form method="POST" action="/proizvodi/{{ $proizvod->id }}" id="delete-form" class="hidden">
            @csrf
            @method('DELETE')
        </form>
    </div>

</x-layout>
