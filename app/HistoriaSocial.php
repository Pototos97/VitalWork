<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HistoriaSocial extends Model
{
    

    protected $table= "Historia_Social";
    protected $primaryKey ="Id_HistoriaSocial";
    public $timestamps = false;


   protected $filliable=['Id_HistoriaSocial','Fecha_Ingreso','Motivo_Ingreso','Modalidad_Ingreso','Tarifa','Antecedentes','Tipologia_Familiar','Dinamica_Familiar','Factores_Protectores','Fatores_Riesgos','Redes_Sociales','Plan_Intervencion','Id_Paciente','Id_Usuario',];



   public function paci(){

    return $this->belongsTo('App\Paciente','Id_Paciente');
   }


   public function usu(){

    return $this->belongsTo('App\User','id');
   }

}

