<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::class('comments')->insert([
            [
                "name"=>"Cocktail",
                "email"=>"test@gmail.com",
                "website"=>"",
                "commentaire"=>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam amet
                reiciendis.",
                "photoprofil"=>"blog-post1.jpg",
                "article_id"=>1,
            ],
            [
                "name"=>"Cocktail",
                "email"=>"test@gmail.com",
                "website"=>"",
                "commentaire"=>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam amet
                reiciendis.",
                "photoprofil"=>"blog-post1.jpg",
                "article_id"=>1,
            ],
            [
                "name"=>"Cocktail",
                "email"=>"test@gmail.com",
                "website"=>"",
                "commentaire"=>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam amet
                reiciendis.",
                "photoprofil"=>"blog-post1.jpg",
                "article_id"=>1,
            ],
            [
                "name"=>"Cocktail",
                "email"=>"test@gmail.com",
                "website"=>"",
                "commentaire"=>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam amet
                reiciendis.",
                "photoprofil"=>"blog-post1.jpg",
                "article_id"=>1,
            ],
            [
                "name"=>"Cocktail",
                "email"=>"test@gmail.com",
                "website"=>"",
                "commentaire"=>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam amet
                reiciendis.",
                "photoprofil"=>"blog-post1.jpg",
                "article_id"=>1,
            ],
            [
                "name"=>"Cocktail",
                "email"=>"test@gmail.com",
                "website"=>"",
                "commentaire"=>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam amet
                reiciendis.",
                "photoprofil"=>"blog-post1.jpg",
                "article_id"=>1,
            ],
        ]);
    }
}
