<?php




namespace App\Models;




use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;




class Country extends Model

{

    protected $table = 'countries';

    protected $primaryKey = "country_id";

    use HasFactory;




    public function region(){

        //BelongsTo parametros
        

        //1)modelo a relacionar

        //2)la llave foranea el el modelo actual




        return $this->hasMany(Region::class,'country_id');

    }




    public function idiomas(){

        //parametros

        //1 modelo a relacionar

        //2 tabla intermedia

        //3 clave foranea de el modelo actual en la tabla intermedia

        //4 clave foranea de el modelo a relacionar en la tabla intermedia

        return $this->belongsToMany(Language::class,'country_languages',
        'country_id',
        'language_id')->withPivot('official');

    }

}