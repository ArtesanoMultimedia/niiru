<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('planes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->string('titulo',100);
            $table->timestamps();
            $table->boolean('privado')->default(true);// por defecto: true
            $table->unsignedInteger('votos')->nullable($value = true)->default(null);
            $table->unsignedInteger('puntos')->nullable($value = true)->default(null);
            $table->tinyInteger('puntuacion')->nullable($value = true)->default(null);// puntuacion = puntos/votos

            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('planes');
    }
}
