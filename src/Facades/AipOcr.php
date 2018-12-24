<?php

namespace Surpaimb\BaiduAip\Facades;

use Illuminate\Support\Facades\Facade;

class AipOcr extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return "AipOcr";
    }
}