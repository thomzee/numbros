<?php


namespace Thomzee\Numbros;

use Thomzee\Numbros\Exceptions\NumbrosException;
use Thomzee\Numbros\Factory\NumbrosRoman;

class NumbrosService
{
    public function generate($type, $prefix, $unique, $separator = '/', $uppercase = true)
    {
        switch ($type) {
            case 'roman' :
                $factory = new NumbrosRoman();
                break;
            default :
                throw new NumbrosException("Type $type not found.");
        }

        $result = $prefix;
        $result .= $factory->generate($separator);
        $result .= $unique;
        if ($uppercase) {
            return strtoupper($result);
        }
        return strtolower($result);
    }
}
