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

    public function setFecha_horaAttribute( $value ) {
        $this->attributes['fecha_hora'] = Carbon::createFromFormat('Y-m-d H:i:s', $value)->toDateTimeString() ;
    }
    
    public function setFecha_finAttribute( $value ) {
        $this->attributes['fecha_fin'] = Carbon::createFromFormat('Y-m-d H:i:s', $value)->toDateTimeString();
    }

}
