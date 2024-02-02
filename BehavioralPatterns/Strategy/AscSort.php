<?php

namespace App\BehavioralPatterns\Strategy;

class AscSort implements Sort
{
    public function sort(array $data): array
    {
        sort($data);

        return $data;
    }
}
