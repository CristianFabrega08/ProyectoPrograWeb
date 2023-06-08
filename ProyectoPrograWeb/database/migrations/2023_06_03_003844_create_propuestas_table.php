<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('propuestas', function (Blueprint $table) {
            $table->string('estudiante_rut',10);
            $table->Integer('id')->autoIncrement()->from(1);
            $table->date('Fecha');
            $table->string('documento',100);
            $table->tinyinteger('estado')->default(1);
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('estudiante_rut')->references('rut')->on('Estudiantes');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('propuestas');
    }
};
