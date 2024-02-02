<?php

namespace App\BehavioralPatterns\Command\Exemple2;

/** see https://refactoring.guru/design-patterns/command */
class DefaultController
{
    public function __invoke()
    {
        /**
         * The client code can parameterize an invoker with any commands.
         */
        $invoker = new Invoker();
        $invoker->setOnStart(new SimpleCommand("Say Hi!"));
        $receiver = new Receiver();
        $invoker->setOnFinish(new ComplexCommand($receiver, "Send email", "Save report"));

        $invoker->doSomethingImportant();
    }
}
