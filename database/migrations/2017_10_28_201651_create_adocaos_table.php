<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdocaosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adocaos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_adotado');
            $table->integer('id_adotante');
            $table->integer('id_protetor');
            $table->foreign('id_adotado')->references('id')->on('animals');
            $table->foreign('id_adotante')->references('id')->on('users');
            $table->foreign('id_protetor')->references('id')->on('users');
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
        Schema::dropIfExists('adocaos');
    }
}
