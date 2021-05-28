<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Productos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->string('nombre_producto',10);
            $table->text('descripcion_producto',50);
            $table->integer('id_categorias')->unsigned();
            $table->foreign('id_categorias')->references("id")->on("categorias");
            $table->integer('id_proveedores')->unsigned();
            $table->foreign('id_proveedores')->references("id")->on("proveedores");
            $table->decimal('precio_unitario',8,2);
            $table->string('calidad_unidad',50);
            $table->string('talla_disponible',50);
            $table->string('colores_disponible',50);
            $table->string('tamano',50);
            $table->string('color',50);
            $table->string('peso_unidad',50);
            $table->integer('unidad_Stock');
            $table->integer('unidad_orden');
            $table->integer('producto_disponible');
            $table->decimal('descuento_disponible',8,2);
            $table->string('orden_actual',50);
            $table->integer('imagenes');
            $table->string('clasificacion',50);
            $table->string('nota',50);
       
            
           
            
           
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
}