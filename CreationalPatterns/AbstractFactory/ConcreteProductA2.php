<?php

namespace App\CreationalPatterns\AbstractFactory;

/**
 * Concrete Products are created by corresponding Concrete Factories.
 */
class ConcreteProductA2 implements AbstractProductA
{
    public function usefulFunctionA(): string
    {
        return "The result of the product A2.";
    }
}
