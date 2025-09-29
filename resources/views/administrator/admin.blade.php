<x-layout>
    <x-slot:heading>
        <div class="container">
            <h2>Administrator strana</h2>
        </div>
    </x-slot:heading>

    <div class="bg-gray-100 p-4 sm:p-8 md:p-16 mt-10">
        <div class="container mx-auto">

            <h2 class="text-2xl font-bold">Administrativni pregled</h2>
            <div class="mt-5 grid grid-cols-1 sm:grid-cols-2 gap-6">
                <div class="bg-white p-6 rounded shadow">
                    <h3 class="text-xl font-semibold mb-4">Statistika</h3>
                    <ul class="text-gray-700 space-y-2">
                        <li><strong>Ukupno poruka:</strong> {{ $totalPoruka }}</li>
                        <li><strong>Ukupno ponuda:</strong> {{ $totalPonuda }}</li>
                    </ul>
                </div>

                <div class="bg-white p-6 rounded shadow">
                    <h3 class="text-xl font-semibold mb-4">PDF eksport</h3>
                    <div class="space-y-2">
                        <x-buttons.button-export href="{{ route('poruke.pdf.all') }}">
                            Preuzmi sve poruke (PDF)
                        </x-buttons.button-export>
                        {{-- <x-buttons.button-download href="{{ route('poruke.exportAllPdf') }}">
                            Preuzmi sve poruke (PDF)
                        </x-buttons.button-download> --}}
                        {{-- <x-buttons.button-download href="{{ route('ponude_dobavljaca.exportAllPdf') }}">
                            Preuzmi sve ponude (PDF)
                        </x-buttons.button-download> --}}
                    </div>
                </div>
            </div>

            <h2 class="text-2xl font-bold mt-10">Pregled poslednjih aktivnosti</h2>
            <div class="mt-5 grid grid-cols-1 sm:grid-cols-2 gap-6">


                <div class="bg-white p-6 rounded shadow">
                    <h3 class="text-xl font-semibold mb-4">Poslednje poruke</h3>
                    <ul class="text-gray-700 space-y-2">
                        @foreach ($poslednjePoruke as $poruka)
                            <li>
                                <a href="{{ route('poruke.show', $poruka) }}" class="text-blue-600 hover:underline">
                                    {{ $poruka->naslov }}
                                </a>
                                <span
                                    class="text-sm text-gray-500">({{ $poruka->created_at ? $poruka->created_at->format('d.m.Y H:i') : 'Nema datuma' }}
                                    )</span>
                            </li>
                        @endforeach
                    </ul>
                </div>

                <div class="bg-white p-6 rounded shadow">
                    <h3 class="text-xl font-semibold mb-4">Poslednje ponude</h3>
                    <ul class="text-gray-700 space-y-2">
                        @foreach ($poslednjePonude as $ponuda)
                            <li>
                                <a href="{{ route('ponude_dobavljaca.show', $ponuda) }}"
                                    class="text-blue-600 hover:underline">
                                    {{ $ponuda->nazivProizvoda }}
                                </a>
                                <span
                                    class="text-sm text-gray-500">({{ $ponuda->created_at ? $ponuda->created_at->format('d.m.Y H:i') : 'Nema datuma' }}
                                    )</span>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>

            <h2 class="text-2xl font-bold mb-6 mt-10">Sekcije za upravljanje podacima</h2>
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

</x-layout>
