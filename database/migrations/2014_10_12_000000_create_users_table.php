<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
/*
            $table->string('nombre');
            $table->string('apellido_paterno');
            $table->string('apellido_materno');
            $table->string('nino_adult');
            $table->string('grado_actual');
            $table->string('grado_subir');
            $table->date('fecha_nacimiento');
            $table->integer('edad');
            $table->string('direccion');
            $table->string('telefono');
            $table->string('edo_civil');
            $table->string('ocupacion_prof');
            $table->date('fecha_examen_anterior');
            $table->date('fecha_ingreso');
            $table->boolean('practicando');
            $table->string('doyang_que_pertenece');
            $table->string('nombre_profesor');
*/
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
