<x-layout>
    <x-slot:meta>
        <title>Prikaz {{ $ponuda->nazivProizvoda }} | SZTR</title>
        <meta name="description" content="Informacije o ponudi dobavljača {{ $ponuda->nazivProizvoda }} koji sarađuje sa SZTR.">
        <meta name="keywords" content="ponude dobaljaca, SZTR, saradnja, nabavka">
        <meta name="robots" content="index, follow">
    </x-slot:meta>
    <x-slot:heading>
        Pojedinacni ponuda dobavljaca
    </x-slot:heading>
    <h2>Podaci o ponudi</h2>
    <p>Broj ponude: <span>{{ $ponuda->brojPonude }}</span> </p>
    <p>Naziv proizvoda: <span>{{ $ponuda->nazivProizvoda }}</span> </p>
    <p>Kolicina: <span>{{ $ponuda->kolicina }}</span> </p>
    <p>Cena: <span>{{ $ponuda->cena }}</span> </p>
    <p>Id Dobavljaca: <span>{{ $ponuda->dobavljac_id }}</span> </p>
    <p class="mt-6">
        <x-link-main href="/ponude_dobavljaca/{{ $ponuda->id }}/edit">Izmeni</x-link-main>
    </p>
</x-layout>
