<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Medico extends Model
{
    //

    protected $fillable = ['nombre', 'apellido', 'especialidad_id'];


    public function especialidads()
    {
        return $this->belongsTo('App\Especialidad');
    }

    public function citas()
    {
        return $this->hasMany('App\Cita');
    }

    public function pacientes()
    {
        return $this->belongsToMany('App\Paciente');
    }

    public function getNameSurname()
    {
        // First String
        $a = 'nombre';

        // Second String
        $b = 'apellido';

        // Concatenation Of String
        $c = $a.$b;

        // print Concatenate String
        return $c;
    }
}
