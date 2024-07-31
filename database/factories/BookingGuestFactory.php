<?php

namespace Database\Factories;

use App\Models\BookingGuest;
use App\Models\Payment;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\BookingGuest>
 */
class BookingGuestFactory extends Factory
{
    protected $model = BookingGuest::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
            'email' => $this->faker->email,
            'phone' => $this->faker->phoneNumber,
            'picture' => $this->faker->imageUrl,
            //  'payment_id' => Payment::factory(),
        ];
    }
}
