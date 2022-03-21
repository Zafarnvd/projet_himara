<?php

namespace Database\Seeders;

use App\Models\CategorieChambre;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ChambreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('chambres')->insert([
            [
                "nom"=>"Pakistan",
                "description"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita adipisci similique eaque magnam cupiditate.",
                "img"=>"images/rooms/single/single1.jpg",
                "prix"=>65,
                "max"=>2,
                "sofa"=>1,
                "lit"=>1,
                "categorie_chambre_id"=>CategorieChambre::inRandomOrder()->first()->id,
            ],
            [
                "nom"=>"Pakistan",
                "description"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita adipisci similique eaque magnam cupiditate.",
                "img"=>"images/rooms/single/single1.jpg",
                "prix"=>65,
                "max"=>2,
                "sofa"=>1,
                "lit"=>1,
                "categorie_chambre_id"=>CategorieChambre::inRandomOrder()->first()->id,
            ],
            [
                "nom"=>"Pakistan",
                "description"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita adipisci similique eaque magnam cupiditate.",
                "img"=>"images/rooms/single/single1.jpg",
                "prix"=>65,
                "max"=>2,
                "sofa"=>1,
                "lit"=>1,
                "categorie_chambre_id"=>CategorieChambre::inRandomOrder()->first()->id,
            ]
        ]);
    }
}
