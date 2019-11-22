<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstagiosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estagios', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Periodo');
            $table->string('Area_atua');
            $table->string('Data_Inicio');
            $table->string('Data_Termino');
            $table->string('Id_Coordenador');
            $table->string('Id_Estagiario');
            $table->string('Id_Empresa');
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
        Schema::dropIfExists('estagios');
    }
}
