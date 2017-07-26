<?php

namespace STD;

use Illuminate\Database\Eloquent\Model;

class Telefono extends Model
{
   protected $table = "telefonos";

    protected $fillable = [
        'TipoTelefono', 
        'Numero',
        'cliente_id'      
    ];   

    //muchos telefonos pertenecen a un cliente
    public function cliente(){
    	return $this->belongsTo('STD\Cliente');
    }
}
