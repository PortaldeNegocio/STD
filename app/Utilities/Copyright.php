<?php

namespace STD\Utilities;

class Copyright
{

    public static function displayNotice()
    {

        $date = date('Y') > 2015 ? date ('Y') : 2015;


        return '&copy ' . $date . ' Sample Project All rights Reserved.';


    }

}