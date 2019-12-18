<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tratamiento extends Model
{
    protected $fillable = ['fecha_ini', 'fecha_fin', 'descripcion', 'medicamento_id'];

    public function medicamentos()
    {
        return $this->belongsToMany('App\Medicamento');
    }

    protected $dates = ['fecha_ini', 'fecha_fin'];

    public function setFecha_iniAttribute( $value ) {
        $this->attributes['fecha_ini'] = Carbon::parse('Y-m-d', $value);
    }

    public function setFecha_finAttribute( $value ) {
        $this->attributes['fecha_fin'] = Carbon::parse('Y-m-d', $value);
    }
}
