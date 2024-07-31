<?php

namespace Database\Factories;

use App\Models\Booking;
use App\Models\BookingGuest;
use App\Models\Conversation;
use App\Models\Partenaire;
use App\Models\Property;
use App\Models\StatusCorrespondance;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Booking>
 */
class BookingFactory extends Factory
{
    protected $model = Booking::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $property = Property::factory(10)->create()[0];
        $guest = BookingGuest::factory(10)->create()[0];
        $status = StatusCorrespondance::factory(10)->create()[0];

        $checkIn = $this->faker->dateTimeBetween('now', '+1 week');
        $checkOut = $this->faker->dateTimeBetween($checkIn->format('Y-m-d H:i:s') . ' +1 day', $checkIn->format('Y-m-d H:i:s') . ' +2 week');
        $interval = $checkIn->diff($checkOut);
        $numberOfNights = $interval->days;



        return [
            'currency' => $this->faker->randomElement(['USD', 'EUR', 'CNY']),
            'preparation_time' => $this->faker->randomElement(['00:15', '00:30', '00:45']),
            'check_in' => $checkIn,
            'check_out' => $checkOut,
            'number_of_nights' => $numberOfNights,
            'number_of_guests' => $this->faker->randomElement([1, 2, 3, 4]),
            'number_of_adults' => $this->faker->randomElement([1, 2, 3, 4]),
            'number_of_children' => $this->faker->randomElement([1, 2]),
            'number_of_animals' => $this->faker->randomElement([1, 2]),
            'external_reservation_id' => $this->faker->regexify('\d{10}'),
            'uid' => $this->faker->regexify('[A-Za-z0-9!@#$%^&*()]{16}'),
            'external_status' => $this->faker->randomElement(['En attente', 'En cours de traitement', 'Confirmé', 'Annulée']),
            'total_fee' => $this->faker->randomFloat(2, 0, 10),
            'total_taxes' => $this->faker->randomFloat(2, 0, 10),
            'total_payout' => $this->faker->randomFloat(2, 20, 100),
            'booked_at' => $this->faker->dateTimeBetween('2024-01-01', 'now')->format('Y-m-d H:i:s'),
            'token' => 'token_' . $this->faker->regexify('\d{10}'),
            'booking_guest_id' => $guest->id,
            'property_id' => $property->id,
            'smoking' => $this->faker->boolean(),
            'pets' => $this->faker->boolean(),
            'reason_for_travel' => $this->faker->randomElement([
                'holidays',
                'work',
                'both',

            ]),
            'partenaire_id' => $status->partenaire_id,
            'booking_status_id' => $status->booking_status_id,
        ];
    }
}
