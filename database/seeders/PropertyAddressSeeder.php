<?php

namespace Database\Seeders;

use App\Models\PropertyAddress;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PropertyAddressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PropertyAddress::factory()->count(10)->create();
    }
}
