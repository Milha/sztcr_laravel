<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Proizvod;

class ProizvodSeeder extends Seeder
{

    public function run(): void
    {
        Proizvod::create([
            'nazivProizvoda' => 'Hrizantema',
            'opis' => 'Cvetovi komadni raznih boja',
            'cena' => 200,
            'kolicina' => 120,
            'magacin_id' => 1,
        ]);

        Proizvod::create([
            'nazivProizvoda' => 'Buket ruza 5000',
            'opis' => 'Buket ruza crvene boje u celofanu od 50cm',
            'cena' => 5000,
            'kolicina' => 3,
            'magacin_id' => 1,
        ]);

        Proizvod::create([
            'nazivProizvoda' => 'Korpa kala 8500',
            'opis' => 'Korpa kala bele boje u korpi od pruca sive boje visine 60cm',
            'cena' => 8500,
            'kolicina' => 1,
            'magacin_id' => 1,
        ]);

        Proizvod::create([
            'nazivProizvoda' => 'Gerber',
            'opis' => 'Cvetovi komadni raznih boja',
            'cena' => 150,
            'kolicina' => 300,
            'magacin_id' => 1,
        ]);

        Proizvod::create([
            'nazivProizvoda' => 'Korpa gerber 6500',
            'opis' => 'Korpa gerbera zute boje i bela gipsofila sa masnom u korpi od pruca braon boje visine 50cm',
            'cena' => 6500,
            'kolicina' => 2,
            'magacin_id' => 2,
        ]);
    }
}
