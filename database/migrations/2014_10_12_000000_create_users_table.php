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
            $table->string('number')->nullable('000000');
            $table->string('lang')->nullable('fr');
            $table->string('contact')->nullable('0000');
            $table->string('adresse')->nullable('Goma');
            $table->string('emailEntreprise')->nullable('jewstrading@gmail.com');
            $table->text('description')->nullable('Jews Trading ...');
            $table->text('apropos')->nullable('A propos de Jews Trading ...');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
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
