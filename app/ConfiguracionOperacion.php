<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ConfiguracionOperacion extends Model
{
    protected $table = 'configuracion_operaciones';

    protected $fillable = [
        'porc_anticipo',
        'porc_interes',
        'notificacion_facturas',
        'gasto_operacion',
        'IVA',
        'cliente_id',
    ];

    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'cliente_id');
    }
}
