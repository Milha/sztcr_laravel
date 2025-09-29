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
            'plata' => 125000.00,
        ]);

        Radnik::create([
            'ime' => 'Jovan',
            'prezime' => 'Glodović',
            'pozicija' => 'Magacioner',
            'plata' => 125000.00,
        ]);

        Radnik::create([
            'ime' => 'Jovan',
            'prezime' => 'Glodović',
            'pozicija' => 'Dostavljač',
            'plata' => 100000.00,
        ]);

        Radnik::create([
            'ime' => 'Nikola',
            'prezime' => 'Jovanović',
            'pozicija' => 'Dostavljač',
            'plata' => 100000.00,
        ]);

        Radnik::create([
            'ime' => 'Marko',
            'prezime' => 'Marković',
            'pozicija' => 'Dostavljač',
            'plata' => 100000.00,
        ]);

        Radnik::create([
            'ime' => 'Ana',
            'prezime' => 'Anić',
            'pozicija' => 'Knjigovođa',
            'plata' => 150000.00,
        ]);

        Radnik::create([
            'ime' => 'Ivana',
            'prezime' => 'Ivić',
            'pozicija' => 'Knjigovođa',
            'plata' => 150000.00,
        ]);
    }
}
