<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Provincia extends Model
{
    public $table = 'provincias';

    public function comunas()
    {
        return $this->hasMany(Ciudad::class, 'provincia_id');
    }

    public function region()
    {
        return $this->belongsTo(Region::class, 'region_id');
    }
}
