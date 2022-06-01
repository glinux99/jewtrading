<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProduitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produits', function (Blueprint $table) {
            $table->id();
            $table->foreign('id_ag')->references('agents')->on('id')->onDelete('cascade')->change();
            $table->foreign('id_com')->references('commandes')->on('id')->onDelete('cascade')->change();
            $table->foreign('id_four')->references('fournisseurs')->on('id')->onDelete('cascade')->change();
            $table->double('prix', 20, 3);
            $table->string('couleur', 10);
            $table->string('declaration');
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
        Schema::dropIfExists('produits');
    }
}
