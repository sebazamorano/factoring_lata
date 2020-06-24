<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOperacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('operaciones', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('usuario_id');
            $table->unsignedBigInteger('cuenta_bancaria_id');
            $table->timestamp('fecha_creación');
            $table->bigInteger('total_monto');
            $table->bigInteger('total_no_financiado');
            $table->bigInteger('total_interes');
            $table->bigInteger('total_comision');
            $table->bigInteger('total_porc_notificacion');
            $table->bigInteger('total_porc_gtos_fijos');
            $table->unsignedDecimal('porc_interes');
            $table->unsignedDecimal('porc_anticipo');
            $table->unsignedBigInteger('notificacion_facturas');
            $table->unsignedBigInteger('gasto_operacion');
            $table->unsignedDecimal('IVA');
            $table->unsignedBigInteger('estado_id');
            $table->timestamps();

            $table->foreign('usuario_id')
                ->references('id')
                ->on('usuarios');

            $table->foreign('cuenta_bancaria_id')
                ->references('id')
                ->on('cuenta_bancarias');

            $table->foreign('estado_id')
                ->references('id')
                ->on('estados');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('operacions');
    }
}
