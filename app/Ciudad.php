<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ciudad extends Model
{
    protected $table = 'ciudades';

    protected $fillable = [
        'nombre', 'region_id'
    ];

    public function region()
    {
        return $this->belongsTo(Region::class, 'region_id', 'id');
    }
}
