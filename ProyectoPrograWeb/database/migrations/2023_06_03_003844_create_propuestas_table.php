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
            $table->Integer('id')->autoIncrement();
            $table->date('fecha');
            $table->string('documento',100);
            $table->tinyinteger('estado');
            $table->foreign('estudiante_rut')->references('rut')->on('estudiantes');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('propuestas');
    }
};
