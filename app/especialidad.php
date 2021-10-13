<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class especialidad extends Model
{
    
protected $table = 'especialidad';
  protected $primaryKey = 'Id_Especialidad';
  public $timestamps = false;

  public function user(){
    return $this->belongsTo('users','Id_Usuario');
  }

    }
