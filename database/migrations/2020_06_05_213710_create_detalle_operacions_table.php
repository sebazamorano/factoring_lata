<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetalleOperacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_operaciones', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('factura_id');
            $table->unsignedBigInteger('operacion_id');
            $table->bigInteger('monto');
            $table->bigInteger('financiado');
            $table->bigInteger('interes');
            $table->bigInteger('comision');
            $table->bigInteger('porc_notificacion');
            $table->bigInteger('porc_gtos_fijos');
            $table->unsignedDecimal('porc_interes');
            $table->unsignedDecimal('porc_anticipo');
            $table->unsignedBigInteger('notificacion_facturas');
            $table->unsignedBigInteger('gasto_operacion');
            $table->unsignedDecimal('IVA');
            $table->timestamps();

            $table->foreign('factura_id')
                ->references('id')
                ->on('facturas');

            $table->foreign('operacion_id')
                ->references('id')
                ->on('operaciones');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detalle_operacions');
    }
}
