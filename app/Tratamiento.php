<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tratamiento extends Model
{
    protected $fillable = ['nombre', 'fecha_inicio', 'fecha_fin', 'descripcion'];

    public function medicamento()
    {
        return $this->hasMany('App\Medicamento');
    }
    public function medTratamiento()
    {
        return $this->hasMany('App\MedTratamiento');
    }

    protected $dates = ['fecha_inicio', 'fecha_fin'];
}
