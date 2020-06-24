<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Factory extends Model
{
    protected $table = 'factories';

    public function usuarios()
    {
        return $this->hasMany(Usuario::class, 'factory_id', 'id');
    }
}
