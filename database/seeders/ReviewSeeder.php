<?php

namespace Database\Seeders;

use App\Models\Chambre;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rooms = Chambre::all();
        foreach($rooms as $room){

            DB::table('reviews')->insert([

                'nom'=>'Maria',
                'location'=>'Pakistan',
                'image'=>'images/blog-post3.jpg',
                'note'=>rand(1,5),
                'chambre_id'=>$room->id,
                'description'=>"Magnifique, je vous le conseille.",
            ]);
        }
    }
}
