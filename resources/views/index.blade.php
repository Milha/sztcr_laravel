<x-layout>
    <x-slot:heading>
        Home Page
    </x-slot:heading>

    <div class="h-screen ">

        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 bg-grey-700 p-10 pt-28">

            <x-cards.card-link-index href="{{ route('administrator.admin') }}">
                <span class="inline-block rounded-lg p-3">
                    <x-heroicon-o-cog-6-tooth class="w-6 h-6 text-gray-600" />
                </span>

                <h2 class="mt-2 font-semibold text-base sm:text-lg text-gray-800">
                    Administrator
                </h2>
                <p class="sm:mt-1 block text-sm sm:text-base text-gray-500">Sekcija aplikacije namenjena
                    administratorima za upravljanje korisnicima, zaposlenima, dobavljačima, stanjem materijala,
                    proizvoda i ponudama.
                </p>
            </x-cards.card-link-index>

            <x-cards.card-link-index href="{{ route('zaposleni.index') }}">
                <span class="inline-block rounded-lg p-3">
                    <x-heroicon-o-briefcase class="w-6 h-6 text-gray-600" />

                </span>
                <h2 class="mt-2 font-semibold text-base sm:text-lg text-gray-800">
                    Zaposleni
                </h2>
                <p class="sm:mt-1 block text-sm sm:text-base text-gray-600"> Sekcija aplikacije namenjena
                    zaposlenima za upravljanje proizvodima, materijalima i pregledom ponuda.
                </p>
            </x-cards.card-link-index>

            <x-cards.card-link-index href="{{ route('administrator.admin') }}">
                <span class="inline-block rounded-lg p-3">
                    <x-heroicon-o-cog-6-tooth class="w-6 h-6 text-gray-600" />
                </span>

                <h2 class="mt-2 font-semibold text-base sm:text-lg text-gray-800">
                    Korisnici</h2>
                <p class="sm:mt-1 block text-sm sm:text-base text-gray-600"> Sekcija namenjena delovima dostupnim
                    registrovanim
                    korisnicima.
                </p>
            </x-cards.card-link-index>

            <x-cards.card-link-index href="{{ route('administrator.admin') }}">
                <span class="inline-block rounded-lg p-3">
                    <x-heroicon-o-cog-6-tooth class="w-6 h-6 text-gray-600" />
                </span>
                <h2 class="mt-2 font-semibold text-base sm:text-lg text-gray-800">
                    Dobavljači </h2>
                <p class="sm:mt-1 block text-sm sm:text-base text-gray-600">Sekcija namenjena ponudama pregledu stanja
                    materijala i ponudama dobavljača.
                </p>
            </x-cards.card-link-index>
        </div>
    </div>
</x-layout>
