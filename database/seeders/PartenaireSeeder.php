<?php

namespace Database\Seeders;

use App\Models\Partenaire;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PartenaireSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Partenaire::factory()->count(10)->create();

        // Données des partenaires
        $partners = [
            [
                'name' => 'Airbnb',
                'url_commercial' => 'https://www.airbnb.com/',
                'url_api' => 'https://api.airbnb.com/',
                'icon' => 'https://cdn.icon-icons.com/icons2/2699/PNG/512/airbnb_tile_logo_icon_168680.png',
                'description' => 'Airbnb is a platform for short-term rental accommodations.',
                'border_color' => '#830000',
                'background_color' => '#FFCBCD',
            ],
            [
                'name' => 'Hospitable',
                'url_commercial' => 'https://www.hospitable.com/',
                'url_api' => 'https://api.hospitable.com/',
                'icon' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS6Ov5G8WRXQ6m4GSSy64g8z7c-RmvnfrJjzg&s',
                'description' => 'Hospitable offers vacation rental management services.',
                'border_color' => '#003580',
                'background_color' => '#AACDFF',
            ],
            [
                'name' => 'Travelnest',
                'url_commercial' => 'https://www.travelnest.com/',
                'url_api' => 'https://api.travelnest.com/',
                'icon' => 'https://play-lh.googleusercontent.com/fi2B8nYvYc_zWcji3SCB80jW8wDU5H0uajEY7-VcRsrC2KDNUlYAVxWUdGFm2Qybrw=w240-h480-rw',
                'description' => 'Travelnest helps property managers market their vacation rentals.',
                'border_color' => '#2D469B',
                'background_color' => '#A5B9FF',
            ],
            [
                'name' => 'Booking',
                'url_commercial' => 'https://www.booking.com/',
                'url_api' => 'https://api.booking.com/',
                'icon' => 'https://cdn.worldvectorlogo.com/logos/bookingcom-1.svg',
                'description' => 'Booking.com is one of the world leading online travel platforms,',
                'border_color' => '#003580',
                'background_color' => '#AACDFF',
            ],
        ];

        // Insérer les données dans la table
        foreach ($partners as $partner) {
            DB::table('partenaires')->insert([
                'name' => $partner['name'],
                'url_commercial' => $partner['url_commercial'],
                'url_api' => $partner['url_api'],
                'icon' => $partner['icon'],
                'description' => $partner['description'],
                'border_color' => $partner['border_color'],
                'background_color' => $partner['background_color'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

    }
}
