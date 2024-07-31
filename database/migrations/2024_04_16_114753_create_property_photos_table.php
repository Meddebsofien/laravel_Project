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
        Schema::create('photos', function (Blueprint $table) {
            $table->id();
            $table->string('url')->nullable();
            $table->integer('order')->nullable();
            $table->string('description')->nullable();
            $table->string('tags')->nullable();
            $table->timestamps();
        });
        Schema::create('property_photos', function (Blueprint $table) {
            $table->foreignIdFor(\App\Models\Property::class)->constrained('properties');
            $table->foreignIdFor(\App\Models\Photo::class)->constrained('photos');
        });

        Schema::table('properties', function (Blueprint  $table) {
            $table->foreignIdFor(\App\Models\Photo::class)->nullable()->constrained();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('photos');
        Schema::dropIfExists('property_photos');
        Schema::table('properties', function (Blueprint  $table) {
            $table->dropForeignIdFor(\App\Models\Photo::class);
        });
    }
};
