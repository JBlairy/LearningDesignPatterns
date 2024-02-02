<?php

namespace App\BehavioralPatterns\Strategy;

/** see https://refactoring.guru/design-patterns/strategy */
class DefaultController
{
    public function __invoke()
    {
        $library = new Library(new AscSort());
        echo "Client: Strategy is set to normal sorting.\n";
        $library->doSomeBusinessLogic();

        echo "\n";

        echo "Client: Strategy is set to reverse sorting.\n";
        $library->setStrategy(new DescSort());
        $library->doSomeBusinessLogic();
    }
}
