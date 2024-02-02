<?php

namespace App\BehavioralPatterns\Observer;

/** see https://refactoring.guru/design-patterns/observer */
class DefaultController
{
    public function __invoke()
    {
        $subject = new Subject();

        $o1 = new ConcreteObserverA();
        $subject->attach(new ConcreteObserverA());

        $o2 = new ConcreteObserverB();
        $subject->attach($o2);
//TODO exemple with DRAFT/PUBLISH
        $subject->someBusinessLogic();
        $subject->someBusinessLogic();

        $subject->detach($o2);

        $subject->someBusinessLogic();
    }
}
