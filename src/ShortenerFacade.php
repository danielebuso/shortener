<?php

namespace DanieleBuso\LaravelShortener;

use Illuminate\Support\Facades\Facade;

/**
 * @see \DanieleBuso\LaravelShortener\Skeleton\SkeletonClass
 */
class ShortenerFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'laravel-shortener';
    }
}
