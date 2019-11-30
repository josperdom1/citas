<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Medico extends Model
{
    //

    protected $fillable = ['name', 'surname', 'especialidad_id'];


    public function especialidad()
    {
        return $this->belongsTo('App\Especialidad');
    }

    public function citas()
    {
        return $this->hasMany('App\Cita');
    }

    public function paciente()
    {
        return $this->belongsToMany('App\Paciente');
    }

    public function getNameSurname()
    {
        // First String
        $a = 'name';

        // Second String
        $b = 'surname';

        // Concatenation Of String
        $c = $a.$b;

        // print Concatenate String
        return $c;
    }
}
