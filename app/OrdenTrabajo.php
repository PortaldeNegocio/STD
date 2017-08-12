<?php

namespace STD;

use Illuminate\Database\Eloquent\Model;

class OrdenTrabajo extends Model
{
    protected $table= "orden_trabajos";

    protected $fillable = [
        'solicitud_estudio_id',
        'UsuarioIdAutorizado',
        'UsuarioIdResponsable',
        'Descripcion',
        'Fecha',
        'RecibidoPor',
        'Estado',
        'Observacion',
        'Extras'
    ];

    //MUCHAS ordenes de trabajo le pertenecen a UNA solicitud de estudio
    public function solicitudEstudio(){
        return $this->belongsTo('STD\SolicitudEstudio');
    }

    //MUCHAS ordenes de trabajo estan autorizados por UN usuario
    public function usuarioAutorizado(){
        return $this->belongsTo('STD\User');
    }

    //MUCHAS ordenes de trabajo le pertenecen a UNA solicitud de estudio
    public function usuarioResponsable(){
        return $this->belongsTo('STD\User');
    }

    //UNA ordern de trabajo le pertenece a UN trabajo de campo
	public function trabajoCampo() {
        return $this->hasOne('STD\TrabajoCampo');
    }
}
