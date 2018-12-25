<?php

namespace Surpaimb\BaiduAip\Facades;

use Illuminate\Support\Facades\Facade;

class AipSpeech extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return "AipSpeech";
    }
}