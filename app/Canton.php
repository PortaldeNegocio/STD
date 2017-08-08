<?php

namespace STD;

use Illuminate\Database\Eloquent\Model;

class Canton extends Model
{
    protected $table = "cantons";

    protected $fillable = ['Canton','provincia_id'];

    //una solicitud de estudio tiene una Canton
    public function provincia(){
        return $this->belongsTo('STD\Provincia');
    }
}
