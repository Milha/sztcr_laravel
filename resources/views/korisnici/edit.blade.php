<x-layout>
    <x-slot:heading>
        <div class="container">
            <h2 class="text-2xl font-bold mb-6">Izmeni podatke korisnika</h2>

        </div>

    </x-slot:heading>
    <div class="container mx-auto bg-white overflow-hidden shadow rounded-lg border">

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

        <form action="{{ route('korisnici.update', $korisnik->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="bg-white overflow-hidden shadow rounded-lg border">
                <div class="px-4 py-5 sm:px-6">
                    <h3 class="text-lg leading-6 font-medium text-gray-900">
                        {{ $korisnik->ime }}
                    </h3>
                    <p class="mt-1 max-w-2xl text-sm text-gray-500">
                        Korisnik je u ulozi: {{ $korisnik->role }}.
                    </p>
                </div>
                <div class="border-t border-gray-200 px-4 py-5 sm:p-0">
                    <div class="sm:divide-y sm:divide-gray-200">
                        <x-forms.form-group>
                            <x-forms.form-label-container>
                                <label for="ime" class="block text-sm font-medium text-gray-700">Ime</label>
                            </x-forms.form-label-container>
                            <x-forms.form-input-container>
                                <input type="text" name="ime" id="ime" class="form-input mt-1 block w-full"
                                    value="{{ $korisnik->ime }}">
                            </x-forms.form-input-container>
                        </x-forms.form-group>
                        <x-forms.form-group class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <x-forms.form-label-container class="text-sm font-medium text-gray-500">
                                <label for="prezime" class="block text-sm font-medium text-gray-700">Prezime</label>
                            </x-forms.form-label-container>
                            <x-forms.form-input-container class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                <input type="text" name="prezime" id="prezime" class="form-input mt-1 block w-full"
                                    value="{{ $korisnik->prezime }}">
                            </x-forms.form-input-container>
                        </x-forms.form-group>
                        <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <x-forms.form-label-container class="text-sm font-medium text-gray-500">
                                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                            </x-forms.form-label-container>
                            <x-forms.form-input-container class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                <input type="text" name="email" id="email" class="form-input mt-1 block w-full"
                                    value="{{ $korisnik->email }}">
                            </x-forms.form-input-container>
                        </div>
                        <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <x-forms.form-label-container class="text-sm font-medium text-gray-500">
                                <label for="role" class="block text-sm font-medium text-gray-700">Uloga</label>
                            </x-forms.form-label-container>
                            <x-forms.form-input-container class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                <input type="text" name="role" id="role" class="form-input mt-1 block w-full"
                                    value="{{ $korisnik->role }}">
                            </x-forms.form-input-container>
                        </div>

                    </div>
                </div>
            </div>
            <x-buttons.button-update type="submit">Ažuriraj</x-buttons.button-update>
        </form>
    </div>

    {{-- Deo forme za editovanje korisnika --}}
    {{-- <div class="form-group mb-4">
        <label for="ime" class="block text-sm font-medium text-gray-700">Ime</label>
        <input type="text" name="ime" id="ime" class="form-input mt-1 block w-full"
            value="{{ $korisnik->ime }}">
    </div>
    <div class="form-group mb-4">
        <label for="prezime" class="block text-sm font-medium text-gray-700">prezime</label>
        <input type="text" name="prezime" id="prezime" class="form-input mt-1 block w-full"
            value="{{ $korisnik->prezime }}">
    </div>
    <div class="form-group mb-4">
        <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
        <input type="text" name="email" id="email" class="form-input mt-1 block w-full"
            value="{{ $korisnik->email }}">
    </div>
    <div class="form-group mb-4">
        <label for="kontakt" class="block text-sm font-medium text-gray-700">Kontakt</label>
        <input type="text" name="kontakt" id="kontakt" class="form-input mt-1 block w-full"
            value="{{ $korisnik->kontakt }}">
    </div> --}}

    {{-- Ovo je deo iz show tabele --}}
    {{-- <div class="bg-white overflow-hidden shadow rounded-lg border">
        <div class="px-4 py-5 sm:px-6">
            <h3 class="text-lg leading-6 font-medium text-gray-900">
                {{ $korisnik->ime }}
            </h3>
            <p class="mt-1 max-w-2xl text-sm text-gray-500">
                Korisnik je u ulozi: {{ $korisnik->role }}.
            </p>
        </div>
        <div class="border-t border-gray-200 px-4 py-5 sm:p-0">
            <dl class="sm:divide-y sm:divide-gray-200">
                <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-500">
                        <label for="ime" class="block text-sm font-medium text-gray-700">Ime</label>
                    </dt>
                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                        <input type="text" name="ime" id="ime" class="form-input mt-1 block w-full"
                            value="{{ $korisnik->ime }}">
                    </dd>
                </div>
                <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-500">
                        Email adresa
                    </dt>
                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                        {{ $korisnik->email }}
                    </dd>
                </div>
                <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-500">
                        Nalog kreiran
                    </dt>
                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                        {{ $korisnik->created_at->format('d.m.Y. H:i') }}
                    </dd>
                </div>

            </dl>
        </div>
    </div> --}}
</x-layout>
