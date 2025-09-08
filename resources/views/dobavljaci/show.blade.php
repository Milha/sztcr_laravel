<x-layout>
    <x-slot:heading>
        <div class="container">
            <h2>Detalji dobavljača</h2>
        </div>
    </x-slot:heading>
    <div class="bg-white overflow-hidden shadow rounded-lg border">
        <dl class="sm:divide-y sm:divide-gray-200">
            <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <dt class="text-sm font-medium text-gray-500">
                    Naziv dobavljača:
                </dt>
                <dd>{{ $dobavljac->naziv }}</dd>
            </div>
            <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <dt class="text-sm font-medium text-gray-500">
                    Kontakt:

                </dt>
                <dd>{{ $dobavljac->kontakt }}</dd>
            </div>
        </dl>
        <x-wide-link href="{{ route('dobavljaci.index') }}" class="ml-4">Nazad</x-wide-link>
    </div>
</x-layout>
