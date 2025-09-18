<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ReproMaterijal;

class ReproMaterijalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ReproMaterijal::insert([
            [
                'naziv' => 'Kala',
                'jedinica_mere' => 'komad',
                'cena' => 300,
                'kolicina' => 50,
                'magacin_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'naziv' => 'Ruza',
                'jedinica_mere' => 'komad',
                'cena' => 250,
                'kolicina' => 200,
                'magacin_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'naziv' => 'Hrizantema',
                'jedinica_mere' => 'komad',
                'cena' => 350,
                'kolicina' => 75,
                'magacin_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
