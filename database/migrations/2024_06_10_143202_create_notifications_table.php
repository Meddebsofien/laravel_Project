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
        Schema::create('my_notifications', function (Blueprint $table) {
            $table->id();
            $table->string('type');
            $table->string('name');
            $table->foreignIdFor(\App\Models\Conversation::class)->constrained('conversations');

            $table->foreignIdFor(\App\Models\User::class)->constrained('users');

            $table->string('user_type');
            $table->text('data');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('my_notifications');
    }
};
