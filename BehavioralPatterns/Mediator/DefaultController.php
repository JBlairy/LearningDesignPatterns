<?php

namespace App\BehavioralPatterns\Mediator;

/** see https://refactoring.guru/design-patterns/mediator */
class DefaultController
{
    public function __invoke()
    {
        $c1 = new Component1();
        $c2 = new Component2();
        new ConcreteMediator($c1, $c2);

        echo "Client triggers operation A.\n";
        $c1->doA();

        echo "\n";
        echo "Client triggers operation D.\n";
        $c2->doD();
    }
}
