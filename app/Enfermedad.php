<?php


namespace App;
use Illuminate\Database\Eloquent\Model;

class Enfermedad extends Model
{
    protected $fillable = ['nombre', 'especialidad'];

    public function paciente(){
        return $this->hasMany('App\Paciente');
    }


}