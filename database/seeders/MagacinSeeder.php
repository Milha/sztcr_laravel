<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Magacin;

class MagacinSeeder extends Seeder
{

    public function run(): void
    {
        Magacin::create([
            'nazivMagacina' => 'Glavni magacin',
            'lokacija' => 'Cerak',
        ]);

        Magacin::create([
            'nazivMagacina' => 'Proizvodni magacin',
            'lokacija' => 'Banovo brdo',
        ]);

        Magacin::create([
            'nazivMagacina' => 'Repromateijal mgacin',
            'lokacija' => 'Savamala',
        ]);

        Magacin::create([
            'nazivMagacina' => 'Carinski magacin',
            'lokacija' => 'Dobanovci',
        ]);
    }
}
