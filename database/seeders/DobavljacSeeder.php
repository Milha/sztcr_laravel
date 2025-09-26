<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Dobavljac;

class DobavljacSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Dobavljac::create([
            'naziv' => 'Park',
            'kontakt' => 'park@park.com',
        ]);

        Dobavljac::create([
            'naziv' => 'Florela',
            'kontakt' => 'florela@florela.com',
        ]);

        Dobavljac::create([
            'naziv' => 'Basta',
            'kontakt' => 'basta@basta.com',
        ]);

        Dobavljac::create([
            'naziv' => 'Bloomen',
            'kontakt' => 'bloomen@bloomen.com',
        ]);
    }
}
