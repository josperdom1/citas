<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Medicamento extends Model
{
    protected $fillable = ['nombre', 'composicion', 'descripcion', 'link'];

    public function tratamiento()
    {
        return $this->belongsTo('App\Tratamiento');
    }


}
