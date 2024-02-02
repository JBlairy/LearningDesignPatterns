<?php

namespace App\BehavioralPatterns\Strategy;

interface Sort
{
    public function sort(array $items): array;
}
