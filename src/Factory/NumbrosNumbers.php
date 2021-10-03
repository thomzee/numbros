<?php


namespace Thomzee\Numbros\Factory;

class NumbrosNumbers implements NumbrosInterface
{
    public function generate($separator)
    {
        $now = date('Ymd');

        $result = $separator;
        $result .= $now;
        $result .= $separator;
        return $result;
    }
}
