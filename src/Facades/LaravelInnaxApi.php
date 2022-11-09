<?php

namespace Uteq\LaravelInnaxApi\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Uteq\LaravelInnaxApi\LaravelInnaxApi
 */
class LaravelInnaxApi extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Uteq\LaravelInnaxApi\LaravelInnaxApi::class;
    }
}
