<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    //


 protected $table='paciente';
  protected $primaryKey = 'Id_paciente';
  protected $fillable=['Id_paciente','PaIdentificacion','PaPrimer_Nombre','PaSegundo_Nombre','PaPrimer_Apellido','PaSegundo_Apellido','PaFecha_Nacimiento','PaEscolaridad','PaOcupacion','PaPension','PaEntidad','PaTelefono','PaGenero','PaEstado_Civil','PaPeso','PaEstatura','PaRh',];


public $timestamps = false;


      public function social()
    {
        return $this->hasmany('App\Ciudad','Id_Ciudad');
    }

public function pacien(){
    return $this->hasMany('App\HistoriaSocial','Id_Paciente'); 
      }
   
}
