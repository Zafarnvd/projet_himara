<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->boolean("validate");
            $table->string("name");
            $table->string("email");
            $table->string("website")->nullable();
            $table->longText("commentaire");
            $table->string("photoProfil")->nullable();
            $table->unsignedBigInteger('article_id');
            $table->foreign('article_id')->references('id')->on("articles")->onDelete("cascade");
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
        Schema::dropIfExists('comments');
    }
}
