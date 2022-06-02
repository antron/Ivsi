<?php

namespace Antron\Ivsi\Facades;

use Illuminate\Support\Facades\Facade;

class Ivsi extends Facade
{

    public static function getFacadeAccessor()
    {
        return 'ivsi';
    }

}
