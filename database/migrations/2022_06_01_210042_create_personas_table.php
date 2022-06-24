<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personas', function (Blueprint $table) {
            $table->id();
            $table->string ('IdentificacionCliente');
            $table->string ('NombreCliente');
            $table->string ('ApelllidoCliente');
            $table->enum ('TipoIdentificacionCliente', ['T.I', 'C.C','C.E','NIT']);
            $table->date ('FechaDeNacimientoCliente');
            $table->enum ('GeneroCliente', ['Masculino', 'Femenino','Indefinido','Otros']);
            $table->string ('DireccionCliente');
            $table->string ('CorreoCliente');
            $table->string ('TelefonoCliente');
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
        Schema::dropIfExists('personas');
    }
};
