<?php


namespace App;
use Illuminate\Database\Eloquent\Model;

class Enfermedad extends Model
{
    protected $fillable = ['nombre','especialidad_id'];

    public function pacientes(){
        return $this->hasMany('App\Paciente');
    }
    public function especialidads(){
        return $this->belongsTo('App\Especialidad');
    }

}