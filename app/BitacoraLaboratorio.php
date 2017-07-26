<?php

namespace STD;

use Illuminate\Database\Eloquent\Model;

class BitacoraLaboratorio extends Model
{
    protected $table = "bitacora_laboratorios";

    protected $fillable = [
        'Fecha',
        'FechaInicio',
        'FechaFin',
        'Cantidad'
    ];
}
