<?php

namespace STD;

use Illuminate\Database\Eloquent\Model;

class BitacoraCampos extends Model
{
    protected $table = "bitacora_campos";

    protected $fillable = [
        'Cantidad',
        'Vehiculo',
        'Operadores',
        'Viaticos',
        'ValorTrabajo',
        'FechaInicio',
        'FechaFin'
    ];
}
