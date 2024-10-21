<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCiudadTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ciudad', function (Blueprint $table) {
            $table->integer('idciudad')->primary();
            $table->string('nombre', 45);
            $table->integer('estado');
            $table->integer('pais_idpais');
            
            $table->foreign('pais_idpais', 'ciudad_pais_fk')->references('idpais')->on('pais');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ciudad');
    }
}
