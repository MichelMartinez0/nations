<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Region extends Model
{   
    protected $table = "regions";
    protected $primaryKey = "region_id";

    use HasFactory;

    public function continente(){
//belongs - Parametro
//Primero modelo a relacionar
        return $this->belongsto(Continent::class,
                                "continent_id");
        //segundo - la FK del modelo a relacionar en el mismo modelo
    }
    public function paises(){
        return $this->hasMany(Country::class,"region_id");
    }

}