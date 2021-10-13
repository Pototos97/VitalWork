<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
   protected $table= 'departamento';
         protected $primaryKey='Id_Departamento';

   protected $filliable=['Id_Departamento','Nombre_Departamento'];


   public function ciudad(){
    return $this->hasMany('App\Ciudad','Id_Ciudad'); 
      }
   
public $timestamps=false;

   }
