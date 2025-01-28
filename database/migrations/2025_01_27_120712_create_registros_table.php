<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registros', function (Blueprint $table) {
            $table->id();
            $table->dateTime('fecha'); //fecha del registro
            $table->char('evento'); // 'E': entrada 
            $table->boolean('visto');
            $table->string('Descripción');
            $table->foreignId('material_id')->nullable()->constrained('materiales')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('movimiento_id')->nullable()->constrained('movimientos')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('ubicacion_id')->nullable()->constrained('ubicacions')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('registros');
    }
}
