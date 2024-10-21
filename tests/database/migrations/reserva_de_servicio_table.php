<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservaDeServicioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reserva_de_servicio', function (Blueprint $table) {
            $table->integer('idreserva');
            $table->integer('servicio_idservicio');
            $table->integer('reserva_idreserva');
            
            $table->primary(['idreserva', 'servicio_idservicio']);
            $table->foreign('reserva_idreserva', 'reserva_de_servicio_reserva_fk')->references('idreserva')->on('reserva');
            $table->foreign('servicio_idservicio', 'reserva_de_servicio_servicio_fk')->references('idservicio')->on('servicio');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reserva_de_servicio');
    }
}
