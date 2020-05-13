<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetalleFactura extends Model
{
    protected $table = 'detalle_facturas';

    protected $fillable = [
        'factura_id',
        'num_lista',
        'nombre_item',
        'descripcion_item',
        'cantidad_item',
        'precio_item',
        'monto_item'
    ];

    public function factura()
    {
        return $this->belongsTo(Factura::class, 'factura_id');
    }
}
