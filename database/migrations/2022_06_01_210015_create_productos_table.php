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
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->string('NombreProducto');
            $table->string('MarcaProducto');
            $table->enum('CategoriaProducto', ['Viveres', 'Bebidas', 'Aseo', 'Utiles']);
            $table->string('ImagenProducto');
            $table->integer('PrecioProducto');
            $table->date('FechaDeEntradaProducto');
            $table->date('FechaDeVencimientoProducto');
            $table->longText('DescripcionProducto');
            $table->integer('DescuentoProducto');
            $table->integer('CantidadProducto');
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
        Schema::dropIfExists('productos');
    }
};
