<?php


namespace Thomzee\Numbros\Facades;

/**
 * Laravel REST API response mapper.
 *
 * @author     Thomas Andrianto
 * @license    MIT
 * @copyright  (c) 2021, Thomas Andrianto
 */

/**
 * Class Numbros
 * @package Thomzee\Numbros\Facades
 * @method generate($type, $prefix, $unique, $separator = '/', $uppercase = true)
 */
class Numbros
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'numbros';
    }
}
