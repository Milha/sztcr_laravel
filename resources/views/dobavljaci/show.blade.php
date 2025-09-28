<x-layout>
    <x-slot:meta>
        <title>Prikaz {{ $dobavljac->naziv }} | SZTR</title>
        <meta name="description" content="Informacije o dobavljaču {{ $dobavljac->naziv }} koji sarađuje sa SZTR.">
        <meta name="keywords" content="dobavljači, SZTR, saradnja, nabavka">
        <meta name="robots" content="index, follow">
    </x-slot:meta>
    <x-slot:heading>
        <div class="container">
            <h2>Detalji dobavljača</h2>
        </div>
    </x-slot:heading>
    <div class="container mx-auto p-6 bg-white overflow-hidden shadow rounded-lg borderr">
        <div class="px-4 py-5 sm:px-6">
            <h3 class="text-lg leading-6 font-medium text-gray-900">
                Dobavljac
            </h3>
        </div>
        <div class="border-t border-gray-200 px-4 py-5 sm:p-0">
            <dl class="sm:divide-y sm:divide-gray-200">
                <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-500">
                        Naziv dobavljača:
                    </dt>
                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">{{ $dobavljac->naziv }}</dd>
                </div>
                <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-500">
                        Kontakt:
                    </dt>
                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">{{ $dobavljac->kontakt }}</dd>
                </div>
            </dl>
            {{-- <x-wide-link href="{{ route('dobavljaci.index') }}" class="ml-4">Nazad</x-wide-link> --}}

            <div class="flex justify-between p-3">
                <x-buttons.button-back href="{{ route('dobavljaci.index') }}">
                    Nazad na listu dobavljača
                </x-buttons.button-back>
                {{-- <x-buttons.button-update type="submit">Ažuriraj</x-buttons.button-update> --}}
            </div>
        </div>
    </div>
</x-layout>
