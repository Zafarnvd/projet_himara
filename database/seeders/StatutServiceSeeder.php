<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatutServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('statut_services')->insert([
            [
                "nom"=>"DISPO"
            ],
            [
                "nom"=>"INDISPO"
            ],
            [
                "nom"=>"MASQUE"
            ],
        ]);
    }
}
