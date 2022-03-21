<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServiceChambresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('service_chambres', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('service_room_id');
            $table->foreign('service_room_id') ->on('service_rooms')->references('id');
            $table->unsignedBigInteger('statut_service_id');
            $table->foreign('statut_service_id') ->on('statut_services')->references('id');
            $table->unsignedBigInteger('chambre_id');
            $table->foreign('chambre_id') ->on('chambres')->references('id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('service_chambres');
    }
}
