<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    //
    protected $fillable = ['nombre', 'apellido', 'nuhsa','enfermedad_id'];


    public function citas()
    {
        return $this->hasMany('App\Cita');
    }
    public function medicos()
    {
        return $this->belongsToMany('App\Medico');
    }
    public function enfermedads(){
        return $this->belongsTo('App\Enfermedad');
    }
}
