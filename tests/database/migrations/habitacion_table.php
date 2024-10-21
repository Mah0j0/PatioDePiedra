<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHabitacionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('habitacion', function (Blueprint $table) {
            $table->integer('idhabitacion')->primary();
            $table->string('nombre', 45);
            $table->integer('numero');
            $table->decimal('precio', 10, 2);
            $table->integer('estado')->default(1);
            $table->integer('disponibilidad_iddisponibilidad');
            $table->integer('tipohabitación_idtipo');
            
            $table->foreign('disponibilidad_iddisponibilidad', 'habitacion_disponibilidad_fk')->references('iddisponibilidad')->on('disponibilidad');
            $table->foreign('tipohabitación_idtipo', 'habitacion_tipohabitación_fk')->references('idtipo')->on('tipohabitación');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('habitacion');
    }
}
