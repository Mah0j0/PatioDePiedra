<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reserva', function (Blueprint $table) {
            $table->integer('idreserva')->primary();
            $table->dateTime('fechaentrada');
            $table->dateTime('fechasalida');
            $table->integer('cantidadadultos');
            $table->integer('cantidadninos');
            $table->decimal('precio', 10, 2);
            $table->decimal('sancion', 10, 2)->default(0.00);
            $table->decimal('descuento', 10, 2)->default(0.00);
            $table->integer('estado');
            $table->integer('metodopago_idpago');
            $table->integer('empleado_idempleado');
            $table->integer('cliente_idcliente');
            $table->integer('habitacion_idhabitacion');
            
            $table->foreign('cliente_idcliente', 'reserva_cliente_fk')->references('idcliente')->on('cliente');
            $table->foreign('empleado_idempleado', 'reserva_empleado_fk')->references('idempleado')->on('empleado');
            $table->foreign('habitacion_idhabitacion', 'reserva_habitacion_fk')->references('idhabitacion')->on('habitacion');
            $table->foreign('metodopago_idpago', 'reserva_metodopago_fk')->references('idpago')->on('metodopago');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reserva');
    }
}
