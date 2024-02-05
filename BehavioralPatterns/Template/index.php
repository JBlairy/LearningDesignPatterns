<?php

namespace App\BehavioralPatterns\Template;

/** see https://refactoring.guru/design-patterns/template-method */
class index
{
    public function __invoke()
    {
        echo "Same client code can work with different subclasses:\n";
        (new ConcreteClass1())->templateMethod();
        echo "\n";

        echo "Same client code can work with different subclasses:\n";
        (new ConcreteClass2())->templateMethod();
    }
}
