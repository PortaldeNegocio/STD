<?php

namespace STD;

use Illuminate\Database\Eloquent\Model;

class Parroquia extends Model
{
	protected $table= "parroquias";

    protected $fillable = [
        'Parroquia'
    ];

    //una solicitud de estudio tiene una Canton
    public function canton(){
        return $this->belongsTo('STD\Canton');
    }
}
