<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * The current password being used by the factory.
     */
    protected static ?string $password;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $randNik = '';
        for ($i = 0; $i < 4; $i++) {
            $randNik .= str_pad(mt_rand(0, 9999), 4, '0', STR_PAD_LEFT);
        }
        $randNip = '';
        for ($i = 0; $i < 4; $i++) {
            $randNip .= str_pad(mt_rand(0, 9999), 4, '0', STR_PAD_LEFT);
        }

        return [
            'id' => Str::ulid(),
            'name' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'nik' => $randNik,
            'nip' => $randNip,
            'id_position' => mt_rand(1,5),
            'email_verified_at' => now(),
            'password' => static::$password ??= Hash::make('password'),
            'status' => mt_rand(0,1),
            'remember_token' => Str::random(10),

        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
