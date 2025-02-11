<?php

namespace Database\Factories;

use App\Models\PropertyAddress;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PropertyAddress>
 */
class PropertyAddressFactory extends Factory
{

    protected $model = PropertyAddress::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array

    {
        $zip_code = strstr($this->faker->postcode, '-', true);

        return [
            'property_number' => $this->faker->numberBetween(1,100),
            'floor' => $this->faker->numberBetween(30,200),
            'building_number' => $this->faker->numberBetween(1,100),
            'street' => $this->faker->streetName,
            'number' => $this->faker->numberBetween(1,20),
            'city' => $this->faker->city,
            'state' => $this->faker->state,
            'zip_code' => $zip_code,
            'country' => $this->faker->country,
            'latitude' => $this->faker->latitude,
            'longitude' => $this->faker->longitude
        ];
    }
}
