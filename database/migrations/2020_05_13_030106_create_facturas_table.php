<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFacturasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('facturas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('usuario_id');
            $table->integer('tipo_dte', false, true)->nullable();
            $table->integer('folio', false, true)->nullable();
            $table->integer('monto_neto', false, true)->nullable();
            $table->integer('monto_excento', false, true)->nullable();
            $table->integer('tasa_iva', false, true)->nullable();
            $table->integer('iva', false, true)->nullable();
            $table->integer('monto_total', false, true)->nullable();
            $table->unsignedBigInteger('empresa_emisora_id');
            $table->unsignedBigInteger('empresa_receptora_id');
            $table->integer('total_descuento', false, true)->nullable();
            $table->integer('giro_recibir', false, true)->nullable();
            $table->integer('excedentes', false, true)->nullable();
            $table->date('fecha_emision')->nullable();
            $table->date('fecha_vencimiento')->nullable();
            $table->timestamps();


            $table->foreign('usuario_id')
                ->references('id')
                ->on('usuarios')
                ->onDelete('cascade');

            $table->foreign('empresa_emisora_id')
                ->references('id')
                ->on('usuarios')
                ->onDelete('cascade');

            $table->foreign('empresa_receptora_id')
                ->references('id')
                ->on('usuarios')
                ->onDelete('cascade');



        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('facturas', function (Blueprint $table) {
            $table->dropForeign('facturas_usuario_id_foreign');
            $table->dropForeign('facturas_empresa_emisora_id_foreign');
            $table->dropForeign('facturas_empresa_receptora_id_foreign');
        });

        Schema::dropIfExists('facturas');
    }
}
