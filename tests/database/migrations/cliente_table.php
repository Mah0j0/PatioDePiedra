<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClienteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cliente', function (Blueprint $table) {
            $table->integer('idcliente')->primary();
            $table->string('apellido', 145);
            $table->string('nombre', 145);
            $table->string('email', 45);
            $table->string('peticionesespeciales', 150)->nullable();
            $table->bigInteger('documento');
            $table->bigInteger('telefono');
            $table->integer('estado')->default(1);
            $table->integer('pais_idpais');
            
            $table->foreign('pais_idpais', 'cliente_pais_fk')->references('idpais')->on('pais');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cliente');
    }
}
