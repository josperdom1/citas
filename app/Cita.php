<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

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

    public function setFechaHoraAttribute( $value ) {
        $this->attributes['fecha_hora'] = Carbon::createFromFormat('Y-m-d\TH:i', $value)->toDateTimeString() ;
        $this->attributes['fecha_hora'] = Carbon::parse($value);
    }
    
    public function setFechaFinAttribute( $value ) {
        $this->attributes['fecha_fin'] = Carbon::createFromFormat('Y-m-d\TH:i', $value)->toDateTimeString() ;
        $this->attributes['fecha_fin'] = Carbon::parse($value);
    }

}
