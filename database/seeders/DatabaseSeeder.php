<?php

namespace Database\Seeders;

use App\Models\ServiceChambre;
use App\Models\ServiceRoom;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            RoleSeeder::class,
            UserSeeder::class,
            CarouselSeeder::class,
            CategorieArticleSeeder::class,
            CategorieChambreSeeder::class,
            CategorieImageSeeder::class,
            ArticleSeeder::class,
            TagChambreSeeder::class,
            // BlogSeeder::class,
            ChambreSeeder::class,
            ChambreTagSeeder::class,
            // CommentSeeder::class,
            ContactSeeder::class,
            FonctionSeeder::class,
            EmployeSeeder::class,
            ImageSeeder::class,
            InfoSeeder::class,
            LogoSeeder::class,
            ReservationSeeder::class,
            RoleSeeder::class,
            ServiceSeeder::class,
            StatutServiceSeeder::class,
            ServiceChambreSeeder::class,
            ServiceRoomSeeder::class,
            TagSeeder::class,
            TagArticleSeeder::class,
            LogoSeeder::class
        ]);
    }
}
