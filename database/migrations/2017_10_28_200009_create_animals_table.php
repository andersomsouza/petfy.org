<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnimalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('animals', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tipo')->nullable();
            $table->string('sexo')->nullable();
            $table->string('cor', 50)->nullable();
            $table->string('porte', 50)->nullable();
            $table->integer('idade')->unsigned()->nullable();
            $table->string('necessidadesEspeciais')->nullable();
            $table->string('picture')->nullable();
            $table->boolean('castrado')->nullable();
            $table->boolean('vacinado')->nullable();
            $table->integer('adocao_id')->default(null)->nullable();
            $table->integer('user_id')->unsigned()->nullable();
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
        Schema::dropIfExists('animals');
    }
}
