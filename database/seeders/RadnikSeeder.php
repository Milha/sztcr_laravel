<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Radnik;

class RadnikSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Radnik::create([
            'ime' => 'Milan',
            'prezime' => 'Petrović',
            'pozicija' => 'Magacioner',
            'plata' => 75000.00,
        ]);
    }
}
