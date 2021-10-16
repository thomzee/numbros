<?php


namespace Thomzee\Numbros\Factory;

interface NumbrosInterface
{
    /**
     * Generate invoice number
     *
     * @param  string  $separator
     * @return string
     */
    public function generate($separator);
}
