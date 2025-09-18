<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    protected static $password;

    public function definition(): array
    {
        return [
            'ime' => fake()->name(),
            'prezime' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            // 'email_verified_at' => now(),
            'created_at' => now(),
            'updated_at' => now(),
            'password' => static::$password ??= Hash::make('test123'),
            'role' => $this->faker->randomElement(['user', 'radnik', 'dobavljac']),
            'remember_token' => Str::random(10),
        ];
    }

    // public function unverified(): static
    // {
    //     return $this->state(fn(array $attributes) => [
    //         'email_verified_at' => null,
    //     ]);
    // }
}
