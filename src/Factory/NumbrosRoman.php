<?php


namespace Thomzee\Numbros\Factory;

class NumbrosRoman implements NumbrosInterface
{
    /**
     * Generate invoice number with Roman pattern
     *
     * @param  string  $separator
     * @return string
     */
    public function generate($separator)
    {
        $now = date('Ymd');
        $nowSeparated = date('Y-m-d');
        $explodedDates = explode('-', $nowSeparated);

        $result = $separator;
        $result .= $now;
        foreach ($explodedDates as $explodedDate) {
            $result .= $separator;
            $result .= $this->toRoman($explodedDate);
        }
        $result .= $separator;
        return $result;
    }

    /**
     * Convert given number to a Roman numeral
     *
     * @param  int  $number
     * @return string
     */
    protected function toRoman($number)
    {
        $map = [
            'M' => 1000,
            'CM' => 900,
            'D' => 500,
            'CD' => 400,
            'C' => 100,
            'XC' => 90,
            'L' => 50,
            'XL' => 40,
            'X' => 10,
            'IX' => 9,
            'V' => 5,
            'IV' => 4,
            'I' => 1
        ];

        $returnValue = '';
        while ($number > 0) {
            foreach ($map as $roman => $int) {
                if ($number >= $int) {
                    $number -= $int;
                    $returnValue .= $roman;
                    break;
                }
            }
        }
        return $returnValue;
    }
}
