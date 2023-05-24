<?php

namespace Webup\HeliumUi\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Webup\HeliumUi\HeliumUi
 */
class HeliumUi extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Webup\HeliumUi\HeliumUi::class;
    }
}
