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
            $table->integer('tipo_dte', false, true);
            $table->integer('folio', false, true);
            $table->integer('monto_neto', false, true);
            $table->integer('monto_excento', false, true);
            $table->integer('tasa_iva', false, true);
            $table->integer('iva', false, true);
            $table->integer('monto_total', false, true);
            $table->unsignedBigInteger('empresa_emisora_id');
            $table->unsignedBigInteger('empresa_receptora_id');
            $table->integer('total_descuento', false, true);
            $table->integer('giro_recibir', false, true);
            $table->integer('excedentes', false, true);
            $table->date('fecha_emision');
            $table->date('fecha_vencimiento');
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
