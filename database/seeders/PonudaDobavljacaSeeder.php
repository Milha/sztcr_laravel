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
    }
}
