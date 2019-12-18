<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Medicamento extends Model
{
    protected $fillable = ['nombre', 'composicion', 'descripcion', 'enlace'];

    public function medTratamientos()
    {
        return $this->belongsToMany('App\MedTratamiento');
    }


}
