<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Reservas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservas', function (Blueprint $table) {
            $table->integer('id_reserva')->index();
            $table->string('nombre_cliente');
            $table->string('comentario');
            $table->string('dia');
            $table->timestamp('hora_inicio');
            $table->timestamp('hora_fin');
            $table->string('nombre_servicio');
            $table->decimal('precio_final', 7, 2);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservas');
    }
}
