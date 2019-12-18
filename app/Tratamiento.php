<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Tratamiento extends Model
{
    protected $fillable = ['nombre', 'fecha_hora', 'fecha_fin', 'descripcion'];

    public function medicamento()
    {
        return $this->hasMany('App\Medicamento');
    }
    public function medTratamiento()
    {
        return $this->hasMany('App\MedTratamiento');
    }

    protected $dates = ['fecha_hora', 'fecha_fin'];

    public function setFechaHoraAttribute( $value ) {
        $this->attributes['fecha_hora'] = Carbon::createFromFormat('Y-m-d\TH:i', $value)->toDateTimeString() ;
        $this->attributes['fecha_hora'] = Carbon::parse($value);
    }

    public function setFechaFinAttribute( $value ) {
        $this->attributes['fecha_fin'] = Carbon::createFromFormat('Y-m-d\TH:i', $value)->toDateTimeString() ;
        $this->attributes['fecha_fin'] = Carbon::parse($value);
    }
}
