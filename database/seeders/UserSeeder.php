<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'ime' => 'Admin',
            'prezime' => 'Administrator',
            'email' => 'admin@example.com',
            'password' => Hash::make('admin123'),
            'role' => 'admin',
        ]);

        User::create([
            'ime' => 'Korisnik',
            'prezime' => 'Korisnik',
            'email' => 'korisni@korisnik.com',
            'password' => Hash::make('korisnik123'),
            'role' => 'user',
        ]);

        User::create([
            'ime' => 'Radnik',
            'prezime' => 'Radnik',
            'email' => 'radnik@radnik.com',
            'password' => Hash::make('radnik123'),
            'role' => 'radnik',
        ]);

        User::create([
            'ime' => 'Dobavljac',
            'prezime' => 'Dobavljac',
            'email' => 'dobavljac@dobavljac.com',
            'password' => Hash::make('dobavljac123'),
            'role' => 'dobavljac',
        ]);

        User::create([
            'ime' => 'Petar',
            'prezime' => 'Petrovic',
            'email' => 'petar@petar.com',
            'password' => Hash::make('petar123'),
            'role' => 'user',
        ]);
    }
}
