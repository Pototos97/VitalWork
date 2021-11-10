<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Caffeinated\Shinobi\Concerns\HasRolesAndPermissions;

class User extends Authenticatable
{
    use Notifiable,HasRolesAndPermissions;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'Nombre1','Nombre2','Apellido1','Apellido2','Cedula', 'email', 'password','Id_EstadoUsuario','Tipo_Documento','Id_Especialidad','Tarjeta_Profesional','Fecha_Registro','Genero','Direccion','Celular','Telefono',
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

public function consulta()
    {
        return $this->hasMany('App\HistoriaC','Id_Usuario');
    }

public function historis()
    {
        return $this->hasMany('App\HistoriaSocial','Id_Usuario');
    }

    public function historic()
    {
        return $this->hasMany('App\HistoriaClinica','Id_Usuario');
    }

public function usu()
    {
        return $this->belongsTo('App\especialidad','Id_Especialidad');
    }


}