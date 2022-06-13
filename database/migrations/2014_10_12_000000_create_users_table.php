<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('number')->nullable()->default('+243970912428');
            $table->string('lang')->nullable()->default('fr');
            $table->string('contact')->nullable()->default('(+243) 814-536-299/(+243) 997-721-070');
            $table->string('adresse')->nullable()->default('Com.De Goma,Q. Les volcans, Av. du Touriste, N-2');
            $table->string('emailEntreprise')->nullable()->default('jewstrading@gmail.com');
            $table->text('description')->nullable()->default('Jews Trading ...');
            $table->text('apropos')->nullable()->default('A propos de Jews Trading ...');
            $table->text('descriptionUS')->nullable()->default('Jews Trading ...');
            $table->text('aproposUS')->nullable()->default('A propos de Jews Trading ...');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('partenaires')->nullable()->default('Be Forward, SBT');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
