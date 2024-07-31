<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('property_addresses', function (Blueprint $table) {
            $table->id();
            $table->string('property_number')->nullable();
            $table->string('floor')->nullable();
            $table->string('building_number')->nullable();
            $table->string('number')->nullable();
            $table->string('street')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('zip_code')->nullable();
            $table->string('country');  // Champ obligatoire
            $table->decimal('latitude', 10, 8)->nullable();  
            $table->decimal('longitude', 11, 8)->nullable();
            $table->timestamps();
        });
        

        Schema::table('properties', function (Blueprint $table) {
             $table->foreignIdFor(\App\Models\PropertyAddress::class)->nullable()->constrained();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('property_addresses');

        Schema::table('properties', function (Blueprint $table) {
            $table->dropforeignIdFor('property_address_id');

        });
    }
};
