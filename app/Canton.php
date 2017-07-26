<?php

namespace STD;

use Illuminate\Database\Eloquent\Model;

class Canton extends Model
{
    protected $table = "cantons";

    protected $fillable = ['Canton','provincia_id'];

}
