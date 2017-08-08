<?php

namespace STD;

use Illuminate\Database\Eloquent\Model;

class SolicitudEstudio extends Model
{
    protected $table= "solicitud_estudios";

    protected $fillable = [
        'Descripcion',
        'Obra',
        'Direccion',
        'Referencia',
        'Coordenadas',
        'Contacto',
        'CostObra'
    ];


    //muchas solicitudes de estudio pertenecen a un cliente
    public function cliente(){
        return $this->belongsTo('STD\Cliente');
    }

    //una solicitud de estudio tiene una parroquia
    public function parroquia(){
        return $this->belongsTo('STD\Parroquia');
    }

    //una solicitud de estudio tiene muchas ordenes de trabajo
    public function ordenTrabajo(){
        return $this->hasMany('STD\OrdenTrabajo');
    }

    public function factura(){
        return $this->hasMany('STD\Factura');
    }
}
