<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('images', function (Blueprint $table) {
            $table->id();
            $table->string('images');
            $table->string('galerie')->nullable();
            $table->string('description')->nullable();
            $table->bigInteger('produit_id')->nullable();
            $table->bigInteger('user_id')->nullable();
            $table->foreign('produit_id')->references('id')->on('produits')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->unsigned();
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
        Schema::dropIfExists('images');
    }
}
