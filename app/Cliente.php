<?php

namespace STD;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
	protected $table = "clientes";

    protected $fillable = [
        'TipoDocumento', 
        'NumeroDocumento',
        'Nombre',
        'Apellido'
    ];

    protected $hidden = [
        'Activo'
    ];

    //muchos telefonos pertenecen a un cliente
    public function telefonos(){
    	return $this->hasMany('STD\Telefono');//->select(array('Numero'));
    }

    //muchos email pertenecen a un cliente
    public function emails(){
    	return $this->hasMany('STD\Email');
    }

    /*//muchos articulos petenecen a un usuario
    public function user(){
    	return $this->belongsTo('STD\User');
    }

    //un articulo puede tener muchas imagenes
    public function images(){
    	return $this->hasMany('STD\Image');
    }

   //uno a uno
    public function images(){
        return $this->hasOne('STD\Image');
    }

    //relacion de muchos a muchos
    public function tags(){
    	return $this->belongsToMany('STD\Tag');
    }*/
}
