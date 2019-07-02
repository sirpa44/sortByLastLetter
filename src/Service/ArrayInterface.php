<?php

namespace App\Service;

interface ArrayInterface
{
    /**
     * sort an array by last letter
     *
     * @param array $data
     * @return array
     */
    public function sorter(array $data): array;
}