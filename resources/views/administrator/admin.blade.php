<x-layout>
    <x-slot:heading>
        <div class="container">
            <h2>Administrator strana</h2>
        </div>
    </x-slot:heading>

    <div class="bg-gray-100 p-4 sm:p-8 md:p-16 mt-20">
        <div class="container mx-auto">
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">

                <a href="/dobavljaci"
                    class="relative flex h-full flex-col rounded-md border border-gray-200 bg-white p-2.5 hover:border-gray-400 sm:rounded-lg sm:p-5">
                    <span class="text-md mb-0 font-semibold text-gray-900 hover:text-black sm:mb-1.5 sm:text-xl">
                        Dobavljači
                    </span>
                    <span class="text-sm leading-normal text-gray-400 sm:block">
                        Upravljanje svim dobavljačima od kojih smo primali ponude.
                    </span>
                </a>
                <a href="/radnici"
                    class="relative flex h-full flex-col rounded-md border border-gray-200 bg-white p-2.5 hover:border-gray-400 sm:rounded-lg sm:p-5">
                    <span class="text-md mb-0 font-semibold text-gray-900 hover:text-black sm:mb-1.5 sm:text-xl">
                        Zaposleni
                    </span>
                    <span class="text-sm leading-normal text-gray-400 sm:block">
                        Upravljanje nalozima zaposlenih koji imaju pristup sistemu.
                    </span>
                </a>
                <a href="/ponude_dobavljaca"
                    class="relative flex h-full flex-col rounded-md border border-gray-200 bg-white p-2.5 hover:border-gray-400 sm:rounded-lg sm:p-5">
                    <span class="text-md mb-0 font-semibold text-gray-900 hover:text-black sm:mb-1.5 sm:text-xl">
                        Ponude dobavljača
                    </span>
                    <span class="text-sm leading-normal text-gray-400 sm:block">
                        Stranica za pregled i upravljanje svim ponudama dobavljača.
                    </span>
                </a>
                <a href="/proizvodi"
                    class="relative flex h-full flex-col rounded-md border border-gray-200 bg-white p-2.5 hover:border-gray-400 sm:rounded-lg sm:p-5">
                    <span class="text-md mb-0 font-semibold text-gray-900 hover:text-black sm:mb-1.5 sm:text-xl">
                        Prozivodi
                    </span>
                    <span class="text-sm leading-normal text-gray-400 sm:block">
                        Stanje zaliha gotovih proizvoda.
                    </span>
                </a>
                <a href="/korisnici"
                    class="relative flex h-full flex-col rounded-md border border-gray-200 bg-white p-2.5 hover:border-gray-400 sm:rounded-lg sm:p-5">
                    <span class="text-md mb-0 font-semibold text-gray-900 hover:text-black sm:mb-1.5 sm:text-xl">
                        Korisnici
                    </span>
                    <span class="text-sm leading-normal text-gray-400 sm:block">
                        Korisnički nalozi koji koriste aplikaciju.
                    </span>
                </a>
                <a href="/repro_materijali"
                    class="relative flex h-full flex-col rounded-md border border-gray-200 bg-white p-2.5 hover:border-gray-400 sm:rounded-lg sm:p-5">
                    <span class="text-md mb-0 font-semibold text-gray-900 hover:text-black sm:mb-1.5 sm:text-xl">
                        Repromaterijal
                    </span>
                    <span class="text-sm leading-normal text-gray-400 sm:block">
                        Stanje zaliha repromaterijala.
                    </span>
                </a>
                <a href="/magacini"
                    class="relative flex h-full flex-col rounded-md border border-gray-200 bg-white p-2.5 hover:border-gray-400 sm:rounded-lg sm:p-5">
                    <span class="text-md mb-0 font-semibold text-gray-900 hover:text-black sm:mb-1.5 sm:text-xl">
                        Magacini
                    </span>
                    <span class="text-sm leading-normal text-gray-400 sm:block">
                        Raspoloživi magacini.
                    </span>
                </a>
                <a href="/poruke"
                    class="relative flex h-full flex-col rounded-md border border-gray-200 bg-white p-2.5 hover:border-gray-400 sm:rounded-lg sm:p-5">
                    <span class="text-md mb-0 font-semibold text-gray-900 hover:text-black sm:mb-1.5 sm:text-xl">
                        Poruke
                    </span>
                    <span class="text-sm leading-normal text-gray-400 sm:block">
                        Poruke korisnika.
                    </span>
                </a>
            </div>
        </div>
    </div>
    {{-- <div class="h-screen ">

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
    </div> --}}
    {{-- <div class="container mx-auto mt-6">
        <div class="bg-white p-6 rounded shadow mb-6">
            <h3 class="text-2xl font-semibold mb-6">Posebne sekcije administratora:</h3>
            <div class="flex flex-col space-y-4">
                <x-basic-link href="/dobavljaci">Svi dobavljaci</x-basic-link>
                <x-basic-link href="/radnici">Svi radnici</x-basic-link>
                <x-basic-link href="/ponude_dobavljaca">Sve ponude dobavljaca</x-basic-link>
                <x-basic-link href="/proizvodi">Svi proizvodi</x-basic-link>
                <x-basic-link href="/korisnici">Svi korisnici</x-basic-link>

            </div>
        </div>
    </div> --}}

</x-layout>
