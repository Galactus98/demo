<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Tipos extends Migration
{
    
    public function up()
    {
        Schema::create('tipos', function(Blueprint $table) { // esta sentencia crea la tabla
			$table->increments('idt'); // define el campo de llave primaria (id)
			$table->String('nombre'); // crea el campo 'nombre'
			// --------------------- Campos de Control ---------------------- \\
			$table->timestamps(); // crea campos 'created_at' 'updated_at'
			$table->rememberToken(); // crea campo 'remember_token'
			$table->softDeletes(); // crea campo 'deleted_at'
		});
    }

    public function down()
    {
        Schema::drop('tipos'); // elimina la migracion
		// Schema::dropIfExists('tipos');
    }
}
