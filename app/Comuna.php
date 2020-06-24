<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comuna extends Model
{
    protected $table = 'comunas';

    protected $fillable = [
        'nombre', 'region_id', 'provincia_id'
    ];

    public function provincia ()
    {
        return $this->belongsTo(Provincia::class, 'provincia_id', 'id');
    }
}
