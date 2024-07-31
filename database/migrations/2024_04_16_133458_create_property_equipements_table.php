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

        Schema::create('equipements', function (Blueprint $table) {
            $table->id();
            $table->string('name');
        });

        Schema::create('equipement_dependencies', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(\App\Models\Equipement::class,'parent_id')->nullable()->constrained('equipements');
            $table->foreignIdFor(\App\Models\Equipement::class,'enfant_id')->nullable()->constrained('equipements');
        });

        Schema::create('equipement_descriptions', function (Blueprint $table) {
            $table->id();
            $table->string('nickname')->nullable();
            $table->string('description');
            $table->boolean('is_room');
            $table->boolean('is_furniture');
            $table->boolean('is_accesory');
        });

        Schema::create('equipement_availabilities', function (Blueprint $table) {
            $table->id();
            $table->date('date_start');
            $table->date('date_end');
            $table->time('horaire_start');
            $table->time('horaire_end');

        });

        Schema::create('property_equipements', function (Blueprint $table) {
            $table->id();
            $table->boolean('private');
            $table->integer('number');
            $table->integer('order');
            $table->foreignId('equipement_description_id')->constrained('equipement_descriptions');
            $table->foreignId('equipement_availability_id')->nullable()->constrained('equipement_availabilities');
            $table->foreignId('equipements_id')->constrained('equipements');
            $table->foreignId('property_equipements_parent_id')->nullable()->constrained('property_equipements');
        });

        Schema::create('property_property_equipement', function (Blueprint $table) {
            $table->foreignIdFor(\App\Models\PropertyEquipement::class)->constrained('property_equipements');
            $table->foreignIdFor(\App\Models\Property::class)->constrained('properties');
        });

        Schema::create('property_equipement_photos', function (Blueprint $table) {
            $table->foreignIdFor(\App\Models\PropertyEquipement::class)->constrained('property_equipements');
            $table->foreignIdFor(\App\Models\Photo::class)->constrained('photos');
        });



    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('equipements');
        Schema::dropIfExists('equipement_dependencies');
        Schema::dropIfExists('equipement_descriptions');
        Schema::dropIfExists('equipement_availabilities');
        Schema::dropIfExists('property_equipements');
        Schema::dropIfExists('property_property_equipement');
        Schema::dropIfExists('property_equipement_photos');
    }
};
