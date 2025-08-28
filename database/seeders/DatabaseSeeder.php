<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Magacin;
use App\Models\Dobavljac;
use App\Models\PonudaDobavljaca;
use App\Models\Proizvod;
use App\Models\Radnik;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $this->call([
            MagacinSeeder::class,
            DobavljacSeeder::class,
            PonudaDobavljacaSeeder::class,
            ProizvodSeeder::class,
            RadnikSeeder::class,
            UserSeeder::class,
        ]);
    }
}
