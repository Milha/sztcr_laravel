<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\PonudaDobavljaca;

class PonudaDobavljacaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PonudaDobavljaca::create([
            'brojPonude' => '1',
            'nazivProizvoda' => 'hrizantema',
            'kolicina' => 100,
            'cena' => 150.00,
            'dobavljac_id' => 1,
        ]);

        PonudaDobavljaca::create([
            'brojPonude' => '1',
            'nazivProizvoda' => 'kala',
            'kolicina' => 250,
            'cena' => 350.00,
            'dobavljac_id' => 1,
        ]);

        PonudaDobavljaca::create([
            'brojPonude' => '1',
            'nazivProizvoda' => 'ruza',
            'kolicina' => 300,
            'cena' => 300.00,
            'dobavljac_id' => 1,
        ]);

        PonudaDobavljaca::create([
            'brojPonude' => '1',
            'nazivProizvoda' => 'ljiljan',
            'kolicina' => 120,
            'cena' => 450.00,
            'dobavljac_id' => 1,
        ]);

        PonudaDobavljaca::create([
            'brojPonude' => '1',
            'nazivProizvoda' => 'gerber',
            'kolicina' => 220,
            'cena' => 180.00,
            'dobavljac_id' => 1,
        ]);
    }
}
