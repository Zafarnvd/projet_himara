<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorieImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categorie_images')->insert([
            [
                "nom"=>"Restaurant",
                "filter"=>"filter-Restaurant",
                "created_at"=>now(),
            ],

            [
                "nom"=>"Swimming-Pool",
                "filter"=>"filter-Swimming-Pool",
                "created_at"=>now(),
            ],
            [
                "nom"=>"Spa",
                "filter"=>"filter-Spa",
                "created_at"=>now(),
            ],
            [
                "nom"=>"Room-View",
                "filter"=>"filter-Room-View",
                "created_at"=>now(),
            ],
        ]);
    }
}
