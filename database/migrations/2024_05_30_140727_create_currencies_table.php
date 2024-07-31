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

        Schema::create('currencies', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('code');
            $table->string('symbol');
            $table->boolean('symbol_first');
            $table->boolean('symbol_espace');
            $table->string('decimal_mark');
            $table->string('thousand_separator');
            $table->string('icon');
        });

        Schema::create('exchange_currencies', function (Blueprint $table) {
            $table->id();
            $table->decimal('exchange_rate', 15, 8); // Utiliser decimal pour plus de précision            
            $table->foreignIdFor(\App\Models\Currency::class)->constrained('currencies');
            $table->date('day_of_exchange');
            $table->foreignId('exchange_to')->constrained('currencies'); // Référence à la table currencies
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
