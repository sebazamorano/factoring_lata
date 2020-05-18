<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClienteEjecutivoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes_ejecutivos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('cliente_id');
            $table->unsignedBigInteger('ejecutivo_id');
            $table->timestamps();

            $table->foreign('cliente_id')
                ->references('id')
                ->on('usuarios');

            $table->foreign('ejecutivo_id')
                ->references('id')
                ->on('usuarios');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('clientes_ejecutivos', function (Blueprint $table) {
            $table->dropForeign('usuarios_cliente_id_foreign');
            $table->dropForeign('usuarios_ejecutivo_id_foreign');
        });

        Schema::dropIfExists('clientes_ejecutivos');
    }
}
