<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FonctionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('fonctions')->insert([
            [
              "nom"=>"HouseKeeper"
            ],
            [
              "nom"=>"Receptionist"
            ],
            [
              "nom"=>"Chef"
            ],
            [
              "nom"=>"Hotel Manager"
            ],
            [
              "nom"=>"Room Service"
            ],
            [
              "nom"=>"Marketing Advisor"
            ],
            [
              "nom"=>"Hotel Manager"
            ],
        ]);
    }
}
