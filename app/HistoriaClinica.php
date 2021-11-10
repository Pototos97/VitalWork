<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HistoriaClinica extends Model
{
    

    protected $table= "historia_clinica";
    protected $primaryKey ="Id_HistoriaClinica";
    public $timestamps = false;


   protected $filliable=['Id_HistoriaClinica','Fecha_Creacion','Motivo_Consulta','Enfermedad_Actual','Medicacion_Actual','Paraclinicos','Discapacidad','Aspecto_General','T_A','Fre_Cardiaca','Pulso','Fre_Respira','Peso','Talla','Impresion_Diagnostica','Factor_Riesgo','Plan_Manejo','Id_Paciente','Id_Usuario',];


 function detallesTipoExamen(){
    return $this->hasMany('detalletipoexamen','Id_HistoriaClinica');
  }
   function antecedentes(){
    return $this->hasMany('antecedentes','Id_HistoriaClinica');
  }

     public function paciente(){

    return $this->belongsTo('App\Paciente','Id_Paciente','Id_Paciente');
   }
      public function usuari(){

    return $this->belongsTo('App\User','Id_Usuario','id');
   }

}

