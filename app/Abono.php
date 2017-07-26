<?php

namespace STD;

use Illuminate\Database\Eloquent\Model;

class Abono extends Model
{
    protected $table = "abonos";

    protected $fillable = [
        'MetodoPago',
        'Total',
        'NumeroCuenta',
        'Fecha'
    ];
}
