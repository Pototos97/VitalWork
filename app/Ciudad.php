<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ciudad extends Model
{
   protected $table= "ciudad";
      protected $primaryKey="Id_Ciudad";
   protected $filliable=['Id_Ciudad','Nombre_Ciudad','Id_Departamento'];

 
    public function departamento(){

    return $this->belongsTo('App\Departamento','Id_Departamento');
   }

public static function ciudad($id){
      return Ciudad::where('Id_Departamento','=',$id)->get();
   }
   /*public static function ciudad($id){
      return Ciudad::where('cod_depto','=',$id)->get();
   }*/
   
public $timestamps=false;

   }
