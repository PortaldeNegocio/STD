<?php

namespace STD;

use Illuminate\Database\Eloquent\Model;

class Email extends Model
{
    protected $table = "emails";

    protected $fillable = [
        'TipoEmail', 
        'Email'      
    ];   

    //muchos emails pertenecen a un cliente
    public function cliente(){
    	return $this->belongsTo('STD\Cliente');
    }
}
