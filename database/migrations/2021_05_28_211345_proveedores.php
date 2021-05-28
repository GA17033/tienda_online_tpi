<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Proveedores extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proveedores', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->string('Nombre_Compania',10);
            $table->string('Contacto_Name',50);
            $table->string('Contacto_Lastname',50);
            $table->string('Direccion',50);
            $table->string('Ciudad',50);
            $table->string('Estado',50);
            $table->string('Codigo_postal',50);
            $table->string('Telefono',50);
            $table->string('Email')->unique();
            $table->string('Metodos_de_pagos',50);
            $table->string('Tipo_descuento',50);
            $table->string('Notas',50);
            $table->Decimal('Descuento_disponible',8,2);
            $table->string('Pais',50);
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
        Schema::dropIfExists('Proveedores');
    }
}
