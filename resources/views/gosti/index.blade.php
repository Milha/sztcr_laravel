<x-layout>
    <x-slot:heading>
        <div class="container">
            <h2>Korisnička strana</h2>
        </div>


    </x-slot:heading>

    <div class="bg-gray-50 p-4 sm:p-8 md:p-16 mt-20">
        <div class="container mx-auto">
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">

                <a href="/proizvodi"
                    class="relative flex h-full flex-col rounded-md border border-gray-200 bg-white p-2.5 hover:border-gray-400 sm:rounded-lg sm:p-5">
                    <span class="text-md mb-0 font-semibold text-gray-900 hover:text-black sm:mb-1.5 sm:text-xl">
                        Prozivodi
                    </span>
                    <span class="text-sm leading-normal text-gray-400 sm:block">
                        Stanje zaliha gotovih proizvoda.
                    </span>
                </a>

            </div>
        </div>
    </div>

</x-layout>
