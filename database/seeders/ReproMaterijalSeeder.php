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
            [
                'naziv' => 'Ljiljan',
                'jedinica_mere' => 'komad',
                'cena' => 400,
                'kolicina' => 40,
                'magacin_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'naziv' => 'Gerber',
                'jedinica_mere' => 'komad',
                'cena' => 150,
                'kolicina' => 300,
                'magacin_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'naziv' => 'Gipsofila',
                'jedinica_mere' => 'komad',
                'cena' => 100,
                'kolicina' => 500,
                'magacin_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'naziv' => 'Masna',
                'jedinica_mere' => 'komad',
                'cena' => 80,
                'kolicina' => 400,
                'magacin_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'naziv' => 'Celofan',
                'jedinica_mere' => 'metar',
                'cena' => 120,
                'kolicina' => 150,
                'magacin_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
