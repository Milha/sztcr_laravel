<x-layout>
    <x-slot:heading>
        Pojedinacni proizvod
    </x-slot:heading>
    <div class="max-w-3xl mx-auto bg-white shadow-md rounded-lg">
        @if ($message = Session::get('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
                {{ $message }}
            </div>
        @endif
        <div class="container mx-auto p-6 bg-white overflow-hidden shadow rounded-lg border">
            <div class="border-t border-gray-200 px-4 py-5 sm:p-0">
                <dl class="sm:divide-y sm:divide-gray-200">
                    <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">
                            Naziv proizvoda:
                        </dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            {{ $proizvod->nazivProizvoda }}
                        </dd>
                    </div>
                    <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">
                            Opis
                        </dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            {{ $proizvod->opis }}
                        </dd>
                    </div>
                    <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">
                            Cena
                        </dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            {{ $proizvod->cena }}
                        </dd>
                    </div>
                    <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">
                            Kolicina
                        </dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            {{ $proizvod->kolicina }}
                        </dd>
                    </div>
                    <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">
                            Magacin
                        </dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            {{ $proizvod->magacin->nazivMagacina }}
                        </dd>
                    </div>
                </dl>
            </div>
            <div
                class="flex flex-wrap gap-3 justify-start sm:justify-center lg:justify-between px-4 py-4 bg-white rounded-lg shadow">
                <x-buttons.button-back href="{{ route('proizvodi.index') }}">
                    Nazad na listu proizvoda
                </x-buttons.button-back>
            </div>
            {{-- <p class="text-gray-700 font-medium mb-1">Naziv proizvoda: <span>{{ $proizvod->nazivProizvoda }}</span> </p>
            <p class="text-gray-700 font-medium mb-1">Opis: <span>{{ $proizvod->opis }}</span> </p>
            <p class="text-gray-700 font-medium mb-1">Cena: <span>{{ $proizvod->cena }}</span> </p>
            <p class="text-gray-700 font-medium mb-1">Kolicina: <span>{{ $proizvod->kolicina }}</span> </p>
            <p class="text-gray-700 font-medium mb-1">Magacin: <span>{{ $proizvod->magacin->nazivMagacina }}</span>
            </p>
            <p class="mt-6">
                <x-link-main href="/proizvodi/{{ $proizvod->id }}/edit">Izmeni</x-link-main>
            </p> --}}
        </div>
    </div>
</x-layout>
