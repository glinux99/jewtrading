<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFournisseursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fournisseurs', function (Blueprint $table) {
            $table->id();
            $table->foreign('id_prod')->references('produits')->on('id')->onDelete('cascade')->change();
            $table->string('marque', 60)->nullable()->change();;
            $table->string('kilometrage', 60);
            $table->date('annee_fab');
            $table->string('moteur', 30);
            $table->string('transmission', 30);
            $table->string('carburateur', 30);
            $table->string('model', 30);
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
        Schema::dropIfExists('fournisseurs');
    }
}
