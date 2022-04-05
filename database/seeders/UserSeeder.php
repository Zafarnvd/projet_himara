<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                "name"=>"Admin",
                "email"=>"test@test.com",
                "password"=>bcrypt('testtest'),
                "role_id" => 1,
            ]
            ]);
    }
}
