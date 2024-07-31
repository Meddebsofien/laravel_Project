<?php

namespace Database\Seeders;

use App\Models\Property;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class PropertySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Property::factory()->count(3)->create();

        // $propertyAttributeIds = [1, 2, 3];
        // $propertyAddressIds = [1, 2, 3, 4];

        // for ($i = 0; $i < 10; $i++) {
        //     DB::table('properties')->insert([
        //         'property_attribute_id' => $propertyAttributeIds[array_rand($propertyAttributeIds)],
        //         'property_address_id' => $propertyAddressIds[array_rand($propertyAddressIds)],
        //     ]);
        // }
    }
}
