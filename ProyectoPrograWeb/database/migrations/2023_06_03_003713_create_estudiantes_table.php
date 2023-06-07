<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     * @return void
     */
    public function up()
    {
        Schema::create('Estudiantes', function (Blueprint $table) {
            $table->primary('rut');
            $table->string('rut',10);
            $table->String('nombre',20);
            $table->String('apellido',20);
            $table->String('email',50);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Estudiante');
    }
};
