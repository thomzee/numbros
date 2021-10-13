<?php


namespace Thomzee\Numbros\Factory;

class NumbrosNumbers implements NumbrosInterface
{
    /**
     * Generate invoice number with Number pattern
     *
     * @param  string  $separator
     * @return string
     */
    public function generate($separator)
    {
        $now = date('Ymd');

        $result = $separator;
        $result .= $now;
        $result .= $separator;
        return $result;
    }
}
