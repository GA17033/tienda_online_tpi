<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DetallesPedido extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('DetallesPedido', function (Blueprint $table) {
            $table->integer('Order_id');

            $table->foreign('id_productos')->references("id")->on("categorias");
            $table->integer('id_productos')->unsigned();

            $table->string('Numero_orden',50);
            $table->decimal('Precio',8,2);
            $table->string('Calidad',50);
            $table->decimal('Descuento',8,2);
            $table->string('Total',50);
            $table->string('Tamano',50);
            $table->string('Color',50);
            $table->date('Fecha_envio');
            $table->id('Order_Detalle_id');
          
            $table->string('Activo',50);
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
        Schema::dropIfExists('Detallespedido');
    }
}
