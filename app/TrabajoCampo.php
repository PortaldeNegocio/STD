<?php

namespace STD;

use Illuminate\Database\Eloquent\Model;

class TrabajoCampo extends Model
{
    protected $table= "trabajo_campos";

    protected $fillable = [
        'UsuarioIdResponsable',
        'EquiposUtilizados',
        'Operadores',
        'HoraEntrada',
        'HoraSalida',
        'Observacion'
    ];



    //MUCHAS Trabajo de campo le pertenecen a UN usuarioResponsable
    public function usuarioResponsable(){
        return $this->belongsTo('STD\User');
    }

    //UNA orden de trabajo le pertenece a UN trabajo de campo
    public function ordenTrabajo() {
        return $this->belongsTo('STD\OrdenTrabajo');
    }
}
