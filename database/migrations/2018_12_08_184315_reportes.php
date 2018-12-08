<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Reportes extends Migration
{
    public function up()
    {
        Schema::create('reportes', function(Blueprint $table) { // esta sentencia crea la tabla
			$table->increments('clave'); // define el campo de llave primaria (id)
			$table->integer('id_prod')->unsigned(); // crea campo foraneo dentro de la tabla
			$table->foreign('id_prod')->references('idpr')->on('productos'); // hace referencia al campo foraneo de la otra tabla
			$table->integer('id_tipo')->unsigned(); // crea campo foraneo dentro de la tabla
			$table->foreign('id_tipo')->references('idt')->on('tipos'); // hace referencia al campo foraneo de la otra tabla
			$table->integer('id_marca')->unsigned(); // crea campo foraneo dentro de la tabla
			$table->foreign('id_marca')->references('idm')->on('marcas'); // hace referencia al campo foraneo de la otra tabla
			$table->integer('id_pais')->unsigned(); // crea campo foraneo dentro de la tabla
			$table->foreign('id_pais')->references('idp')->on('paises'); // hace referencia al campo foraneo de la otra tabla
			// --------------------- Campos de Control ---------------------- \\
			$table->timestamps(); // crea campos 'created_at' 'updated_at'
			$table->rememberToken(); // crea campo 'remember_token'
			$table->softDeletes(); // crea campo 'deleted_at'
		});
    }

    public function down()
    {
        Schema::drop('reportes'); // elimina la migracion
		// Schema::dropIfExists('reportes');
    }
}
