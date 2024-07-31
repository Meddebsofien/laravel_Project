<?php

namespace Database\Seeders;

use App\Models\FeesProperty;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FeesPropertySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ini_set('memory_limit', '512M');
        FeesProperty::factory()->count(10)->create();
    }
}
