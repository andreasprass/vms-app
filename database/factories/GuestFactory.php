<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Guest>
 */
class GuestFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {   
        $id_type = ['SIM','KTP','PASSPORT'];
        $randId = '';
        for ($i = 0; $i < 4; $i++) {
            $randId .= str_pad(mt_rand(0, 9999), 4, '0', STR_PAD_LEFT);
        }
        return [
            //
            'id' => Str::ulid(),
            'name' => fake()->name(),
            'identity_type' => fake()->randomElement($id_type),
            'identity_number' => $randId,
            'person_image' => fake()->imageUrl(640,640,'people'),
            'status' => mt_rand(0,1),
        ];
    }
}
