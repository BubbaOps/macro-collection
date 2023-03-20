<?php

namespace BubbaOps\MacroCollection\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \BubbaOps\MacroCollection\MacroCollection
 */
class MacroCollection extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \BubbaOps\MacroCollection\MacroCollection::class;
    }
}
