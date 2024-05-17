<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Camion extends Model
{
    use HasFactory;

    public function camiones(){
        return $this->belongsToMany('App\Models\Camionero');
    }
}
