<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Camionero extends Model
{
    use HasFactory;
    public function paquetes(){
        return $this->hasMany('App\Models\Paquete');
    }

    public function camiones(){
        return $this->belongsToMany('App\Models\Camion');
    }
}
