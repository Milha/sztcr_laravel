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
            'nazivProizvoda' => 'hrizantema',
            'opis' => 'Cvetovi komadni raznih boja',
            'opis' => 'Cvetovi komadni raznih boja',
            'cena' => 150,
            'kolicina' => 120,
            'magacin_id' => 1,
        ]);
    }
}
