<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    protected $table = 'regiones';

    public function ciudades()
    {
        return $this->hasManyThrough(Provincia::class, Ciudad::class, 'provincia_id', 'region_id');
    }

    public function provincias ()
    {
        return $this->hasMany(Provincia::class, 'region_id', 'id');
    }
}
