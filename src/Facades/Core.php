<?php

namespace Incadev\Core\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Incadev\Core\Core
 */
class Core extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Incadev\Core\Core::class;
    }
}
