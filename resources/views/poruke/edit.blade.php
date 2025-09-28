<x-layout>
    <x-slot:heading name="heading">
        Izmeni podatke poruka
    </x-slot:heading>

    <div class="bg-white overflow-hidden shadow rounded-lg border">
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

        <form action="{{ route('poruke.update', $poruka->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="bg-white overflow-hidden shadow rounded-lg border">

                <div class="border-t border-gray-200 px-4 py-5 sm:p-0">
                    <div class="sm:divide-y sm:divide-gray-200">
                        <x-forms.form-group>
                            <x-forms.form-label-container>
                                <label for="naslov" class="block text-sm font-medium text-gray-700">Naslov</label>
                            </x-forms.form-label-container>
                            <x-forms.form-input-container>
                                <input type="text" name="naslov" id="naslov" class="form-input mt-1 block w-full"
                                    value="{{ $poruka->naslov }}">
                            </x-forms.form-input-container>
                        </x-forms.form-group>
                        <x-forms.form-group class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <x-forms.form-label-container class="text-sm font-medium text-gray-500">
                                <label for="sadrzaj" class="block text-sm font-medium text-gray-700">Sadrzaj</label>
                            </x-forms.form-label-container>
                            <x-forms.form-input-container class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                <input type="text" name="sadrzaj" id="sadrzaj" class="form-input mt-1 block w-full"
                                    value="{{ $poruka->sadrzaj }}">
                            </x-forms.form-input-container>
                        </x-forms.form-group>
                        <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <x-forms.form-label-container class="text-sm font-medium text-gray-500">
                                <label for="procitana" class="block text-sm font-medium text-gray-700">Procitana</label>
                            </x-forms.form-label-container>
                            {{-- <x-forms.form-input-container class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                <input type="text" name="procitana" id="procitana"
                                    class="form-input mt-1 block w-full"
                                    value="{{ $poruka->procitana ? 'Obradjeno' : 'Neobradjeno' }}">
                            </x-forms.form-input-container> --}}

                            <x-forms.form-input-container class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                <label class="inline-flex items-center">
                                    <input type="checkbox" name="procitana" id="procitana"
                                        class="form-checkbox h-5 w-5 text-green-600"
                                        {{ $poruka->procitana ? 'checked' : '' }}>
                                    <span class="ml-2 text-gray-700">Obrađena</span>
                                </label>
                            </x-forms.form-input-container>

                        </div>
                        {{-- <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <x-forms.form-label-container class="text-sm font-medium text-gray-500">
                                <label for="plata" class="block text-sm font-medium text-gray-700">Plata</label>

                            </x-forms.form-label-container>
                            <x-forms.form-input-container class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                <input type="text" name="plata" id="plata" class="form-input mt-1 block w-full"
                                    value="{{ $poruka->plata }}">
                            </x-forms.form-input-container>
                        </div> --}}
                    </div>
                </div>
            </div>
            <div class="flex justify-between p-3">
                <x-buttons.button-back href="{{ route('poruke.index') }}">
                    Nazad na listu poruka
                </x-buttons.button-back>
                <x-buttons.button-update type="submit">Ažuriraj</x-buttons.button-update>
            </div>


        </form>
    </div>

</x-layout>
