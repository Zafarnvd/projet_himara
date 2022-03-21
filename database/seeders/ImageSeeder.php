<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('images')->insert([
            [
                "nom"=>"cocktail",
                "url"=>"gallery3.jpg",
                "categorie_image_id"=>1,
                "created_at"=>now(),
            ],
            [
                "nom"=>"chambre",
                "url"=>"gallery2.jpg",
                "categorie_image_id"=>4,
                "created_at"=>now(),

            ],
        ]);
    }
}
