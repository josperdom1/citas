<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MedTratamiento extends Model
{
    //

    protected $fillable = ['fecha_inicial', 'fecha_final', 'unidades', 'frecuencia', 'instruccion', 'tratamiento_id'];
    public function tratamientos()
    {
        return $this->belongsTo('App\Tratamiento');
    }


    public function medicamentos()
    {
        return $this->belongsToMany('App\Medicamento');
    }
}