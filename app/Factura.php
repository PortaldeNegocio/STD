<?php

namespace STD;

use Illuminate\Database\Eloquent\Model;

class Factura extends Model
{
    protected $table= "facturas";

    protected $fillable = [
        'NumeroFactura',
        'Codigo',
    ];

    //MUCHAS facturas le pertenecen a UNA solicitud de estudio
    public function solicitudEstudio(){
        return $this->belongsTo('STD\SolicitudEstudio');
    }
}
