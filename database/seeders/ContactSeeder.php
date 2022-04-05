<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contacts')->insert([

            "nom"=>"string",
            "email"=>"zafar@gmail.com",
            "phone"=>"0123456789",
            "sujet"=>"Sujet",
            "msg"=>"BONJOUR",
        ]);
    }
}
