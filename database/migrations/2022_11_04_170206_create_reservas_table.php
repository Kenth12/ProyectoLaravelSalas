<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservas', function (Blueprint $table) {
            $table->foreignId('id_user')->references('id_user')->on('users');
            $table->foreignId('id_sala')->references('id_sala')->on('salas');
            $table->foreignId('id_equipo')->references('id_equipo')->on('equipos');
            $table->date('fecha_reserva');
            $table->dateTime('hora_reserva');
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
        Schema::dropIfExists('reservas');
    }
}
