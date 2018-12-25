<?php

namespace Surpaimb\BaiduAip\Facades;

use Illuminate\Support\Facades\Facade;

class AipKg extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return "AipKg";
    }
}