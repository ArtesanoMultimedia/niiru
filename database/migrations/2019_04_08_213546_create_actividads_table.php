<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActividadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actividades', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id');
            $table->unsignedBigInteger('plan_id')->unsigned();
            $table->date('dia');
            $table->unsignedTinyInteger('bloque');// 1: mañana, 2: mediodia, 3: tarde, 4: noche
            $table->unsignedTinyInteger('orden');
            $table->string('api',10);// por defecto: 'minube'
            $table->string('api_id');// string, porque podría no ser un número para alguna api
            $table->string('nombre',100);
            $table->string('img',255);
            $table->string('latitud',20);
            $table->string('longitud',20);
            $table->timestamp('hora_prevista');
            $table->timestamp('llegada');// por defecto null
            $table->timestamp('salida');// por defecto null
            $table->boolean('hecho');// por defecto: false
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('actividades');
    }
}
