<?php declare(strict_types=1);

namespace App\Service;

class ArraySorter implements ArrayInterface
{

    /**
     * sort an array by last letter
     *
     * @param array $data
     * @return array
     */
    public function sorter(array $data): array
    {
        usort($data, function($a, $b) {
            return strrev($a) <=> strrev($b);
        });
        return $data;
    }
}