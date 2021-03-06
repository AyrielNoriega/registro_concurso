<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->string('nombre');
            $table->string('apellido');
            $table->bigInteger('cedula')->unique();
            $table->bigInteger('celular');
            $table->string('correo')->unique();
            $table->boolean('habeas_data');

            
            $table->foreignId('departamento_id');
            $table->foreign('departamento_id')->references('id')->on('departamentos');

            $table->foreignId('ciudad_id');
            $table->foreign('ciudad_id')->references('id')->on('ciudads');

            // $table->string('password');
            // $table->rememberToken();
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
