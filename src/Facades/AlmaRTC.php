<?php

namespace Salvatori\AlmaRTC\Facades;

use Illuminate\Support\Facades\Facade;

class AlmaRTC extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'AlmaRTC';
    }
}
