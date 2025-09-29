<x-layout>
    <x-slot:meta>
        <title>Prikaz {{ $ponuda->nazivProizvoda }} | SZTR</title>
        <meta name="description"
            content="Informacije o ponudi dobavljača {{ $ponuda->nazivProizvoda }} koji sarađuje sa SZTR.">
        <meta name="keywords" content="ponude dobaljaca, SZTR, saradnja, nabavka">
        <meta name="robots" content="index, follow">
    </x-slot:meta>
    <x-slot:heading>
        Pojedinacni ponuda dobavljaca
    </x-slot:heading>

    <div class="max-w-3xl mx-auto bg-white shadow-md rounded-lg">
        <div class="px-4 py-5 sm:px-6">
            <h3 class="text-lg leading-6 font-medium text-gray-900">
                Ponuda
            </h3>
        </div>
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
                            {{ $ponuda->nazivProizvoda }}
                        </dd>
                    </div>
                    <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">
                            Broj ponude:
                        </dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            {{ $ponuda->brojPonude }}
                        </dd>
                    </div>
                    <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">
                            Cena
                        </dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            {{ $ponuda->cena }}
                        </dd>
                    </div>
                    <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">
                            Kolicina
                        </dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            {{ $ponuda->kolicina }}
                        </dd>
                    </div>
                    <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">
                            Naziv dobavljača:
                        </dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            {{ $ponuda->dobavljac->naziv }}
                        </dd>
                    </div>
                </dl>
            </div>
            <div
                class="flex flex-wrap gap-3 justify-start sm:justify-center lg:justify-between px-4 py-4 bg-white rounded-lg shadow">
                <x-buttons.button-back href="{{ route('ponude_dobavljaca.index') }}">
                    Nazad na listu ponuda dobavljača
                </x-buttons.button-back>
            </div>

        </div>
    </div>
</x-layout>
