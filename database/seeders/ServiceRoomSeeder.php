<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceRoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('service_rooms')->insert([
            [
                "nom"=>"Breakfast",
                "icon"=>"fa fa-coffee",
                "description"=>"Breakfast Included"
            ],
            [
                "nom"=>"WIFI",
                "icon"=>"fa fa-wifi",
                "description"=>"WIFI Included"
            ],
            [
                "nom"=>"TV",
                "icon"=>"fa fa-television",
                "description"=>"TV Included"
            ],
            [
                "nom"=>"Bathroom",
                "icon"=>"fa fa-bath",
                "description"=>"Bathroom Included"
            ],
            [
                "nom"=>"Double Bed",
                "icon"=>"fa fa-bed",
                "description"=>"Double Bed Included"
            ],
            [
                "nom"=>"80 SQ MT",
                "icon"=>"fa fa-coffee",
                "description"=>"80 SQ MT Included"
            ],
            [
                "nom"=>"3 persons",
                "icon"=>"fa fa-coffee",
                "description"=>"3 persons Included"
            ],
            [
                "nom"=>"Free Internet",
                "icon"=>"fa fa-coffee",
                "description"=>"Free Internet Included"
            ],
            [
                "nom"=>"Private Balcony",
                "icon"=>"fa fa-coffee",
                "description"=>"Private Balcony Included"
            ],
            [
                "nom"=>"Free Newspaper",
                "icon"=>"fa fa-coffee",
                "description"=>"Free Newspaper Included"
            ],
            [
                "nom"=>"Flat TV screen",
                "icon"=>"fa fa-coffee",
                "description"=>"Flat TV screen Included"
            ],
            [
                "nom"=>"Beach view",
                "icon"=>"fa fa-coffee",
                "description"=>"Beach view Included"
            ],
            [
                "nom"=>"Full AC",
                "icon"=>"fa fa-coffee",
                "description"=>"Full AC Included"
            ],
            [
                "nom"=>"Room Service",
                "icon"=>"fa fa-coffee",
                "description"=>"Room Service Included"
            ],
        ]);
    }
}
