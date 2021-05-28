<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Ordenes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Ordenes', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('Cliente_id')->nullable();
            $table->foreign('Cliente_id')->references('id')->on('Cliente')->onDelete('set null');
            $table->string('Numero_Orden',50);

            $table->unsignedBigInteger('Pagos_id')->nullable();
            $table->foreign('Pagos_id')->references('id')->on('Pagos')->onDelete('set null');

            $table->date('Fecha_de_envio',50);
            $table->string('Estado_transacción',12);
            $table->string('Pagado',12);
            $table->date('Fecha_de_pago',50);
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
        Schema::dropIfExists('Ordenes');
    }
}
