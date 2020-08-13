<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHerramientasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('herramientas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 100)->nullable();
            $table->text('longitud', 150)->nullable();
            $table->string('marca', 80)->nullable();
            $table->text('fecha_fbc', 50)->nullable();
            $table->text('serie_lote', 80)->nullable();
            $table->text('norma_cert', 70)->nullable();
            $table->string('descripcion', 80)->nullable();
            $table->text('prioridad_mant', 30)->nullable();
            $table->text('fecha_uso', 60)->nullable();
            $table->text('limite_vida', 50)->nullable();
            $table->text('acomulado_uso', 50)->nullable();
            $table->bigInteger('categoria_id')->unsigned()->nullable();
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
        Schema::dropIfExists('herramientas');
    }
}
