<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evolucion extends Model
{
    

    protected $table= "for_evolucion";
    protected $primaryKey ="Id_Evolucion";
    public $timestamps = false;


   protected $filliable=['Fecha_Seguimiento','Observaciones',];


   public function evolucion(){

    return $this->belongsTo('App\HistoriaSocial','Id_HistoriaSocial','Id_HistoriaSocial');
   }

   public function evop(){

    return $this->belongsTo('App\Paciente','Id_Paciente','Id_Paciente');
   }

}

