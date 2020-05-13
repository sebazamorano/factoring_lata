<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetalleFacturasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_facturas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('factura_id');
            $table->integer('num_lista', false, true);
            $table->string('nombre_item');
            $table->string('descripcion_item');
            $table->integer('cantidad_item');
            $table->integer('precio_item');
            $table->integer('monto_item');
            $table->timestamps();

            $table->foreign('factura_id')
                ->references('id')
                ->on('facturas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('detalle_facturas', function (Blueprint $table) {
            $table->dropForeign('detalle_facturas_factura_id_foreign');
        });

        Schema::dropIfExists('detalle_facturas');
    }
}
