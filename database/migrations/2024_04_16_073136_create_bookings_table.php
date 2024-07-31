<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Enum\CurrencyEnum;

class CreateBookingsTable extends Migration
{
    public function up(): void
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(\App\Models\Property::class)->constrained('properties');
            $table->string('currency');
            $table->time('preparation_time');
            $table->dateTime('check_in');
            $table->dateTime('check_out');
            $table->integer('number_of_nights');
            $table->integer('number_of_guests');
            $table->integer('number_of_adults');
            $table->integer('number_of_children');
            $table->integer('number_of_animals');
            $table->string('external_reservation_id');
            $table->string('uid');
            $table->string('external_status');
            $table->float('total_fee');
            $table->float('total_taxes');
            $table->float('total_payout');
            $table->dateTime('booked_at');
            $table->boolean('smoking');
            $table->boolean('pets');
            $table->string('reason_for_travel');
            $table->string('token');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
}
