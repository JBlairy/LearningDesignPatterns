<?php

namespace App\BehavioralPatterns\Strategy;

class DescSort implements Sort
{
    public function sort(array $data): array
    {
        rsort($data);

        return $data;
    }
}
