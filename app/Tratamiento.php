<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tratamiento extends Model
{
    protected $fillable = ['fecha_inicio', 'fecha_fin', 'descripcion', 'medicamento_id'];

    public function medicamento()
    {
        return $this->hasMany('App\Medicamento');
    }

    protected $dates = ['fecha_inicio', 'fecha_fin'];
}
