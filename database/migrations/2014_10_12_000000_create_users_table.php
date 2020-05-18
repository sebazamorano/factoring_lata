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
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id();
            $table->string('apodo')->nullable();
            $table->string('nombre');
            $table->string('apellido')->nullable();
            $table->string('razon_social')->nullable();
            $table->string('rut')->unique();
            $table->string('email')->unique();
            $table->string('direccion')->nullable();
            $table->enum('sexo', ['m', 'f'])->nullable();
            $table->unsignedBigInteger('ciudad_id')->nullable();
            $table->integer('codigo_postal')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
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
