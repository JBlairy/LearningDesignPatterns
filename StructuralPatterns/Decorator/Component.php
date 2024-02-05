<?php

namespace App\StructuralPatterns\Decorator;

/**
 * The base Component interface defines operations that can be altered by
 * decorators.
 */
interface Component
{
    public function operation(): string;
}
