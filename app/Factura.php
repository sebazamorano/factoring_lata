<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Factura extends Model
{
    protected $table = 'facturas';

    protected $fillable = [
        'id',
        'usuario_id',
        'tipo_dte',
        'folio',
        'monto_neto',
        'monto_excento',
        'tasa_iva',
        'iva',
        'monto_total',
        'empresa_emisora_id',
        'empresa_receptora_id',
        'total_descuento',
        'giro_recibir',
        'excedentes',
        'fecha_emision',
        'fecha_vencimiento'
    ];

    protected $dates = [
        'fecha_emision',
        'fecha_vencimiento'
    ];

    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'usuario_id', 'id');
    }

    public function emisor()
    {
        return $this->belongsTo(Usuario::class, 'empresa_emisora_id', 'id');
    }

    public function receptor()
    {
        return $this->belongsTo(Usuario::class, 'empresa_receptora_id', 'id');
    }

    public function detalles()
    {
        return $this->hasMany(DetalleFactura::class, 'factura_id', 'id');
    }

}
