<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ContactConversationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        \DB::table('contact_conversation')->insert([
            'contact_id' => 1,
            'conversation_id' => 1
        ]);

        \DB::table('contact_conversation')->insert([
            'contact_id' => 2,
            'conversation_id' => 1
        ]);

        \DB::table('contact_conversation')->insert([
            'contact_id' => 3,
            'conversation_id' => 1
        ]);

        \DB::table('contact_conversation')->insert([
            'contact_id' => 4,
            'conversation_id' => 1
        ]);

        \DB::table('contact_conversation')->insert([
            'contact_id' => 2,
            'conversation_id' => 2
        ]);

        \DB::table('contact_conversation')->insert([
            'contact_id' => 3,
            'conversation_id' => 2
        ]);

        \DB::table('contact_conversation')->insert([
            'contact_id' => 4,
            'conversation_id' => 2
        ]);

        \DB::table('contact_conversation')->insert([
            'contact_id' => 5,
            'conversation_id' => 3
        ]);

        \DB::table('contact_conversation')->insert([
            'contact_id' => 6,
            'conversation_id' => 3
        ]);

        \DB::table('contact_conversation')->insert([
            'contact_id' => 6,
            'conversation_id' => 4
        ]);

        \DB::table('contact_conversation')->insert([
            'contact_id' => 4,
            'conversation_id' => 4
        ]);

        \DB::table('contact_conversation')->insert([
            'contact_id' => 1,
            'conversation_id' => 5
        ]);
    }
}
