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
            $table->unsignedBigInteger('admin_id')->foreign('admin_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            $table->string('marque', 60);
            $table->string('kilometrage', 60)->nullable('000000');
            $table->date('annee_fab')->nullable();
            $table->string('moteur', 30);
            $table->string('transmission', 30);
            $table->string('carburateur', 30);
            $table->string('emplacement')->nullable("Japon");
            $table->string('model', 30);
            $table->double('prix', 20, 3);
            $table->string('couleur', 10)->nullable();
            $table->string('declaration')->nullable('N/D');
            $table->string('file');
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
