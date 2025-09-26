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
            'nazivMagacina' => 'Glavni Magacin',
            'lokacija' => 'Cerak',
        ]);

        Magacin::create([
            'nazivMagacina' => 'Proizvodni Magacin',
            'lokacija' => 'Banovo brdo',
        ]);

        Magacin::create([
            'nazivMagacina' => 'Repromateijal Magacin',
            'lokacija' => 'Savamala',
        ]);
    }
}
