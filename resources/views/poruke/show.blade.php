<x-layout>
    <x-slot:meta>
        <title>Prikaz {{ $poruka->naslov }} | SZTR</title>
        <meta name="description"
            content="Informacije o poruci naslova {{ $poruka->naslov }} koja je poslata administratoru.">
        <meta name="keywords" content="poruke, SZTR, saradnja, nabavka">
        <meta name="robots" content="index, follow">
    </x-slot:meta>
    <x-slot:heading>
        <div class="container">
            <h2>Cela porkuka</h2>
        </div>
    </x-slot:heading>

    <div class="bg-white overflow-hidden shadow rounded-lg border">
        <div class="border-t border-gray-200 px-4 py-5 sm:p-0">
            <div class="px-4 py-5 sm:px-6">
                <h3 class="text-lg leading-6 font-medium text-gray-900">
                    Poruka
                </h3>
            </div>
            <div class="border-t border-gray-200 px-4 py-5 sm:p-0">
                <dl class="sm:divide-y sm:divide-gray-200">
                    <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">
                            Posiljalac
                        </dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            {{ $poruka->id }}
                        </dd>
                    </div>
                    <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">
                            Naslov
                        </dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            {{ $poruka->naslov }}
                        </dd>
                    </div>
                    <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">
                            Sadrzaj poruke
                        </dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            {{ $poruka->sadrzaj }}
                        </dd>
                    </div>
                    <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">
                            Obradjeno
                        </dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            {{ $poruka->procitana ? 'Obradjeno' : 'Neobradjeno' }}
                        </dd>
                    </div>
                    <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">
                            Poslato
                        </dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            {{ $poruka->created_at }}
                        </dd>
                    </div>
                </dl>
                <div class="flex justify-between p-3">
                    <x-buttons.button-back href="{{ route('poruke.index') }}">
                        Nazad na listu poruke
                    </x-buttons.button-back>
                    <x-buttons.button-export href="{{ route('poruke.pdf.single', $poruka->id) }}">
                        Eksportuj kao PDF
                    </x-buttons.button-export>
                </div>
            </div>
        </div>
</x-layout>
