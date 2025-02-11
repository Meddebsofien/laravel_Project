<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('users')->delete();

        \DB::table('users')->insert(
            array(
                0 =>
                    array(
                        'id' => 1,
                        'role_id' => 1,
                        'phone' => '1234567890',
                        'name' => 'Wave Admin',
                        'email' => 'admin@admin.com',
                        'username' => 'admin',
                        'avatar' => 'users/default.png',
                        'password' => '$2y$10$L8MjmjVVOCbyLHbp7pq/9.1ZEEa5AqE67ZXLd2M4.res05a3Rz/G2',
                        'remember_token' => '4oXDVo48Lm1pc4j7NkWI9cMO4hv5OIEJFMrqjSCKQsIwWMGRFYDvNpdioBfo',
                        'settings' => NULL,
                        'created_at' => '2017-11-21 16:07:22',
                        'updated_at' => '2018-09-22 23:34:02',
                        'stripe_id' => NULL,
                        'card_brand' => NULL,
                        'card_last_four' => NULL,
                        'trial_ends_at' => NULL,
                        'verification_code' => NULL,
                        'verified' => 1,
                    ),
            )
        );

        for ($i = 0; $i < 10; $i++) {
            $name = fake()->name();
            $email = preg_replace("/(?![.=$'€%-])\p{P}/u", '', $name);
            $email = strtolower(str_replace(' ', '.', $email)) . '@innovqube.com';
            $email = preg_replace('/\.{2,}/', '.', $email);
            $phone = rand(1000000000, 9999999999);

            \DB::table('users')->insert([
                'role_id' => 1,
                'name' => $name,
                'phone' => $phone,
                'email' => $email,
                'username' => $name,
                'avatar' => 'users/profile-picture-3.jpg',
                'password' => '$2y$10$L8MjmjVVOCbyLHbp7pq/9.1ZEEa5AqE67ZXLd2M4.res05a3Rz/G2',
                'remember_token' => '4oXDVo48Lm1pc4j7NkWI9cMO4hv5OIEJFMrqjSCKQsIwWMGRFYDvNpdioBfo',
                'settings' => NULL,
                'created_at' => now(),
                'updated_at' => NULL,
                'stripe_id' => NULL,
                'card_brand' => NULL,
                'card_last_four' => NULL,
                'trial_ends_at' => NULL,
                'verification_code' => NULL,
                'verified' => 1,
            ]);
        }
    }
}