<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConfiguracionOperacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('configuracion_operaciones', function (Blueprint $table) {
            $table->id();
            $table->unsignedDecimal('porc_anticipo')->default(0.95);
            $table->unsignedDecimal('porc_interes')->default(0.03);
            $table->unsignedBigInteger('notificacion_facturas')->default(13000);
            $table->unsignedBigInteger('gasto_operacion')->default(10000);
            $table->unsignedDecimal('IVA')->default(0.019);
            $table->unsignedBigInteger('cliente_id');
            $table->timestamps();

            $table->foreign('cliente_id')
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
        Schema::dropIfExists('configuracion_operacions');
    }
}
