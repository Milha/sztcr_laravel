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

        <form action="{{ route('repro_materijali.update', $reproMaterijal->id) }}" method="POST" class="w-full max-w-lg">
            @csrf
            @method('PUT')
            <div class="bg-white overflow-hidden shadow rounded-lg border">
                <div class="border-t border-gray-200 px-4 py-5 sm:p-0">
                    <div class="sm:divide-y sm:divide-gray-200">
                        <x-forms.form-group>
                            <x-forms.form-label-container>
                                <label for="naziv" class="block text-sm font-medium text-gray-700">Naziv
                                    repromaterijala</label>
                            </x-forms.form-label-container>
                            <x-forms.form-input-container>
                                <input type="text" name="naziv" id="naziv" class="form-input mt-1 block w-full"
                                    value="{{ old('naziv', $reproMaterijal->naziv) }}">
                            </x-forms.form-input-container>
                        </x-forms.form-group>
                        <x-forms.form-group class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <x-forms.form-label-container class="text-sm font-medium text-gray-500">
                                <label for="jedinica_mere" class="block text-sm font-medium text-gray-700">Jedinica
                                    mere</label>
                            </x-forms.form-label-container>
                            <x-forms.form-input-container class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                <input type="text" name="jedinica_mere" id="jedinica_mere"
                                    class="form-input mt-1 block w-full" value="{{ $reproMaterijal->jedinica_mere }}">
                            </x-forms.form-input-container>
                        </x-forms.form-group>
                        <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <x-forms.form-label-container class="text-sm font-medium text-gray-500">
                                <label for="cena" class="block text-sm font-medium text-gray-700">Cena</label>
                            </x-forms.form-label-container>
                            <x-forms.form-input-container class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                <input type="text" name="cena" id="cena" class="form-input mt-1 block w-full"
                                    value="{{ $reproMaterijal->cena }}">
                            </x-forms.form-input-container>
                        </div>
                        <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <x-forms.form-label-container class="text-sm font-medium text-gray-500">
                                <label for="kolicina" class="block text-sm font-medium text-gray-700">Kolicina</label>
                            </x-forms.form-label-container>
                            <x-forms.form-input-container class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                <input type="text" name="kolicina" id="kolicina"
                                    class="form-input mt-1 block w-full" value="{{ $reproMaterijal->kolicina }}">
                            </x-forms.form-input-container>
                        </div>
                        <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <x-forms.form-label-container class="text-sm font-medium text-gray-500">
                                <label for="magacin" class="block text-sm font-medium text-gray-700">magacin</label>
                            </x-forms.form-label-container>
                            <x-forms.form-input-container class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                <select name="magacin_id" id="magacin_id" class="form-select mt-1 block w-full">
                                    @foreach ($magacini as $magacin)
                                        <option value="{{ $magacin->id }}"
                                            {{ $reproMaterijal->magacin_id == $magacin->id ? 'selected' : '' }}>
                                            {{ $magacin->nazivMagacina }}
                                        </option>
                                    @endforeach
                                </select>
                            </x-forms.form-input-container>
                        </div>

                    </div>
                </div>
            </div>


            <div class="flex items-center justify-between">
                <a href="{{ route('repro_materijali.index') }}"
                    class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800">
                    Nazad na listu repromaterijala
                </a>
                <x-button-potvrda type="submit">
                    Sačuvaj Izmene
                </x-button-potvrda>
            </div>
        </form>
    </div>
    <div
        class="flex flex-wrap gap-3 justify-start sm:justify-center lg:justify-between px-4 py-4 bg-white rounded-lg shadow">
        <x-buttons.button-back href="{{ route('repro_materijali.index') }}">
            Nazad na listu proizvoda
        </x-buttons.button-back>
    </div>

</x-layout>
