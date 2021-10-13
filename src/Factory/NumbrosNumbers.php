<?php


namespace Thomzee\Numbros\Factory;

class NumbrosNumbers implements NumbrosInterface
{
    /**
     * This function return numbers of date with separators
     * @param $separator
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
