<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\EquipementAvailability>
 */
class EquipementAvailabilityFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'date_start' => $this->faker->date(),
            'date_end' => $this->faker->date(),
            'horaire_start' => $this->faker->time(),
            'horaire_end' => $this->faker->time(),
        ];
    }
}
