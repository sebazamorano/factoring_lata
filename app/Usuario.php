<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;
use Silber\Bouncer\Database\HasRolesAndAbilities;

class Usuario extends Authenticatable
{
    use Notifiable, HasRolesAndAbilities, SoftDeletes;

    protected $table = 'usuarios';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nombre', 'email', 'password',
        'apodo', 'apellido', 'razon_social',
        'rut', 'direccion', 'ciudad_id',
        'codigo_postal', 'sexo'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    protected $dates = [
        'deleted_at'
    ];

    public function ciudad()
    {
        return $this->belongsTo(Comuna::class, 'ciudad_id');
    }

    public function factory()
    {
        return $this->belongsTo(Factory::class, 'factory_id', 'id');
    }

    public function clientes()
    {
        return $this->belongsToMany(Usuario::class, 'clientes_ejecutivos', 'cliente_id', 'ejecutivo_id');
    }

    public function configuracion()
    {
        return $this->hasOne(ConfiguracionOperacion::class, 'cliente_id');
    }

    public function getFullNameAttribute()
    {
        return $this->nombre . ' ' . $this->apellido;
    }

    public function scopeCliente($query)
    {
        $query->whereIs('cliente');
    }

    public function scopeEjecutivo($query)
    {
        $query->whereIs('ejecutivo');
    }

    public function scopeEvaluador($query)
    {
        $query->whereIs('evaluador');
    }

    public function scopeAdmin($query)
    {
        $query->whereIs('admin');
    }





}
