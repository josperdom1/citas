<?php


namespace App;
use Illuminate\Database\Eloquent\Model;

class Localizacion extends Model
{
    protected $fillable = ['latitud', 'longitud'];

    public function cita(){
        return $this->hasMany('App\Cita');
    }

}