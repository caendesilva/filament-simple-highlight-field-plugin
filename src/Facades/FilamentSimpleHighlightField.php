<?php

namespace Desilva\FilamentSimpleHighlightField\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Desilva\FilamentSimpleHighlightField\FilamentSimpleHighlightField
 */
class FilamentSimpleHighlightField extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Desilva\FilamentSimpleHighlightField\FilamentSimpleHighlightField::class;
    }
}
