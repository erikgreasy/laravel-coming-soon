<?php

namespace Erikgreasy\LaravelComingSoon\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Erikgreasy\LaravelComingSoon\LaravelComingSoon
 */
class LaravelComingSoon extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Erikgreasy\LaravelComingSoon\LaravelComingSoon::class;
    }
}
