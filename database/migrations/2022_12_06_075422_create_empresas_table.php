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
        Schema::create('empresas', function (Blueprint $table) {
            $table->engine="InnoDB";
            $table->id();
            $table->string('NombreEmpresa');
            $table->string('CIF');
            $table->string('Localidad');
            $table->string('Direccion');
            $table->string('Email');
            $table->string('DireccionWeb');
            $table->string('Telefono');
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
        Schema::dropIfExists('empresas');
    }
};
