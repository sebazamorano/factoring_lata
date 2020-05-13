<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    protected $table = 'regiones';

    public function ciudades()
    {
        return $this->hasMany(Ciudad::class, 'region_id', 'id');
    }
}
