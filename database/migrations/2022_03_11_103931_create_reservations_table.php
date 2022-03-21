<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('email');
            $table->dateTime('debut');
            $table->dateTime('fin');
            $table->integer('adult');
            $table->integer('enfant');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->on('Users')->references('id');
            $table->unsignedBigInteger('categorie_chambre_id');
            $table->foreign('categorie_chambre_id')->on('categorie_chambres')->references('id');
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
        Schema::dropIfExists('reservations');
    }
}
