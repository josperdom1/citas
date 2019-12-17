<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cita extends Model
{
    protected $fillable = ['fecha_hora', 'fecha_fin', 'medico_id', 'paciente_id','localizacion_id'];

    public function medico()
    {
        return $this->belongsTo('App\Medico');
    }

    public function paciente()
    {
        return $this->belongsTo('App\Paciente');
    }
    public function localizacion(){
        return $this->hasOne('App\Localizacion');
    }
    protected $dates = ['fecha_hora', 'fecha_fin'];

    public function setDateTimeAttribute( $value ) {
        $this->attributes['fecha_hora'] = (new Carbon($value))->format('d/m/y');
    }
    public function setDateTime2Attribute( $value ) {
        $this->attributes['fecha_fin'] = (new Carbon($value))->format('d/m/y');
    }
    //esto es para solucionar lo del carbon que sea lo que dios quiera (he puesto los 2 xq no me fio)


}
