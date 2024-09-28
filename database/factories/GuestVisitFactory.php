<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\GuestVisit>
 */
class GuestVisitFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'id_guest' => 1,
            'reason' => "Factory Visit",
            'clock_in' => fake()->dateTimeThisMonth(),
        ];
    }
}
