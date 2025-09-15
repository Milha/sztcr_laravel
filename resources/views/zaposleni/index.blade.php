<x-layout>
    <x-slot:heading>
        <div class="container">
            <h2>Zaposleni</h2>
        </div>
    </x-slot:heading>

    <div class="bg-gray-100 p-4 sm:p-8 md:p-16 mt-20">
        <div class="container mx-auto">
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">

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
                <a href="/magacin"
                    class="relative flex h-full flex-col rounded-md border border-gray-200 bg-white p-2.5 hover:border-gray-400 sm:rounded-lg sm:p-5">
                    <span class="text-md mb-0 font-semibold text-gray-900 hover:text-black sm:mb-1.5 sm:text-xl">
                        Magacin
                    </span>
                    <span class="text-sm leading-normal text-gray-400 sm:block">
                        Stanje zaliha repromaterijala.
                    </span>
                </a>
            </div>
        </div>
    </div>
    {{-- <div class="container mx-auto mt-6">
        <div class="bg-white p-6 rounded shadow mb-6">
            <h3 class="text-2xl font-semibold mb-6">Posebne sekcije zaposlenog:</h3>
            <div class="flex flex-col space-y-4">
                
                <x-basic-link href="/proizvodi">Svi proizvodi</x-basic-link>
                <x-basic-link href="/dobavljaci">Svi dobavljaci</x-basic-link>
                <x-basic-link href="/ponude_dobavljaca">Sve podnude dobavljaca</x-basic-link>

            </div>
        </div>
    </div> --}}

</x-layout>
