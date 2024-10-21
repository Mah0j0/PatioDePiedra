<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpleadoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empleado', function (Blueprint $table) {
            $table->integer('idempleado')->primary();
            $table->string('nombre', 145);
            $table->string('apellido', 145);
            $table->string('usuario', 45);
            $table->string('contrasena', 45);
            $table->string('email', 45);
            $table->bigInteger('telefono');
            $table->bigInteger('documento');
            $table->integer('estado')->default(1);
            $table->integer('puesto_idpuesto');
            $table->integer('roles_idroles');
            
            $table->foreign('puesto_idpuesto', 'empleado_puesto_fk')->references('idpuesto')->on('puesto');
            $table->foreign('roles_idroles', 'empleado_roles_fk')->references('idrol')->on('rol');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('empleado');
    }
}
