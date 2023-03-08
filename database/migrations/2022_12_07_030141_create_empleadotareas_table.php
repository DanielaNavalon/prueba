<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empleadotareas', function (Blueprint $table) {
            $table->engine="InnoDB";
            $table->id();
            $table->unsignedBigInteger('idEmpleado');
            $table->unsignedBigInteger('idTarea');
            $table->timestamps();


            $table->foreign('idEmpleado')->references('id')->on('empleados')->onDelete;
            $table->foreign('idTarea')->references('id')->on('tareas')->onDelete;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('empleadotareas');
    }
};
