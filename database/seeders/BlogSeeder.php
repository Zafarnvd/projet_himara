<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('blogs')->insert(([
            [
                "titre"=>"Lorem ipsum dolor sit amet",
                "img"=>"img",
                "description"=>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam amet
                reiciendis ducimus deserunt non dolorum, distinctio repellendus eaque,
                officiis dicta! Sit numquam qui tenetur tempore officia minus, a
                dignissimos",
            ],
            [
                "titre"=>"Lorem ipsum dolor sit amet",
                "img"=>"img",
                "description"=>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam amet
                reiciendis ducimus deserunt non dolorum, distinctio repellendus eaque,
                officiis dicta! Sit numquam qui tenetur tempore officia minus, a
                dignissimos",
            ],
            [
                "titre"=>"Lorem ipsum dolor sit amet",
                "img"=>"img",
                "description"=>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam amet
                reiciendis ducimus deserunt non dolorum, distinctio repellendus eaque,
                officiis dicta! Sit numquam qui tenetur tempore officia minus, a
                dignissimos",
            ],
            [
                "titre"=>"Lorem ipsum dolor sit amet",
                "img"=>"img",
                "description"=>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam amet
                reiciendis ducimus deserunt non dolorum, distinctio repellendus eaque,
                officiis dicta! Sit numquam qui tenetur tempore officia minus, a
                dignissimos",
            ],
            [
                "titre"=>"Lorem ipsum dolor sit amet",
                "img"=>"img",
                "description"=>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam amet
                reiciendis ducimus deserunt non dolorum, distinctio repellendus eaque,
                officiis dicta! Sit numquam qui tenetur tempore officia minus, a
                dignissimos",
            ],
            [
                "titre"=>"Lorem ipsum dolor sit amet",
                "img"=>"img",
                "description"=>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam amet
                reiciendis ducimus deserunt non dolorum, distinctio repellendus eaque,
                officiis dicta! Sit numquam qui tenetur tempore officia minus, a
                dignissimos",
            ],
        ]));
    }
}
