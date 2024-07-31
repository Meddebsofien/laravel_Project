<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PropertyEquipment>
 */
class PropertyEquipmentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'availability' => $this->faker->randomElement(['available', 'unavailable', 'reserved']),
            'exterior_location' => $this->faker->streetAddress(),
            'interior_location' => $this->faker->word(),
        ];
    }
}
