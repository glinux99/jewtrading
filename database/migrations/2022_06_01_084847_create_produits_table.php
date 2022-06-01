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
            $table->unsignedBigInteger('agent_id')->foreign('agent_id')->references('id')->on('agents')->onUpdate('cascade')->onDelete('cascade');
            $table->unsignedBigInteger('commande_id')->foreign('commande_id')->references('id')->on('commandes')->onUpdate('cascade')->onDelete('cascade');
            $table->unsignedBigInteger('fournisseur_id')->foreign('fournisseur_id')->references('id')->on('fournisseurs')->onUpdate('cascade')->onDelete('cascade');
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
