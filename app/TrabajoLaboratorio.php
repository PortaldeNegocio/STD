<?php

namespace STD;

use Illuminate\Database\Eloquent\Model;

class TrabajoLaboratorio extends Model
{
    protected $table= "trabajo_laboratorios";

    protected $fillable = [
        'ObservacionesTrabajo',
        'DescripcionMuestra',
        'Estado'
    ];


   
}
