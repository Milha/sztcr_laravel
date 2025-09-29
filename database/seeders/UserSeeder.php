<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::updateOrCreate([
            'ime' => 'Admin',
            'prezime' => 'Administrator',
            'email' => 'admin@admin.com',
            'password' => Hash::make('admin123'),
            'role' => 'admin',
        ]);

        User::updateOrCreate([
            'ime' => 'Korisnik',
            'prezime' => 'Korisnik',
            'email' => 'korisnik@korisnik.com',
            'password' => Hash::make('korisnik123'),
            'role' => 'user',
        ]);

        User::updateOrCreate([
            'ime' => 'Radnik',
            'prezime' => 'Radnik',
            'email' => 'radnik@radnik.com',
            'password' => Hash::make('radnik123'),
            'role' => 'radnik',
        ]);

        User::updateOrCreate([
            'ime' => 'Dobavljac',
            'prezime' => 'Dobavljac',
            'email' => 'dobavljac@dobavljac.com',
            'password' => Hash::make('dobavljac123'),
            'role' => 'dobavljac',
        ]);

        User::updateOrCreate([
            'ime' => 'Petar',
            'prezime' => 'Petrovic',
            'email' => 'petar@petar.com',
            'password' => Hash::make('petar123'),
            'role' => 'user',
        ]);

        User::updateOrCreate([
            'ime' => 'Marko',
            'prezime' => 'Markovic',
            'email' => 'marko@marko.com',
            'password' => Hash::make('marko123'),
            'role' => 'user',
        ]);

        User::factory()->count(30)->create();
    }
}
