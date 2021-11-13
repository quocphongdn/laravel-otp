<?php

namespace Quocphongdn\Otp\Support\Facades;

use Illuminate\Support\Facades\Facade;

class Otp extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'otp';
    }
}
