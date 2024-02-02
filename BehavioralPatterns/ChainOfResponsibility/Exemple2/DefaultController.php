<?php

namespace App\BehavioralPatterns\ChainOfResponsibility\Exemple2;

/** see https://refactoring.guru/design-patterns/chain-of-responsibility */
class DefaultController
{
    public function __invoke()
    {
        /**
         * The other part of the client code constructs the actual chain.
         */
        $monkey = new MonkeyHandler();
        $squirrel = new SquirrelHandler();
        $dog = new DogHandler();

        $monkey->setNext($squirrel)->setNext($dog);

        /**
         * The client should be able to send a request to any handler, not just the
         * first one in the chain.
         */
        echo "Chain: Monkey > Squirrel > Dog\n\n";
        $this->clientCode($monkey);
        echo "\n";

        echo "Subchain: Squirrel > Dog\n\n";
        $this->clientCode($squirrel);
    }


    /**
     * The client code is usually suited to work with a single handler. In most
     * cases, it is not even aware that the handler is part of a chain.
     */
    private function clientCode(Handler $handler)
    {
        foreach (["Nut", "Banana", "Cup of coffee"] as $food) {
            echo "Client: Who wants a " . $food . "?\n";
            $result = $handler->handle($food);
            if ($result) {
                echo "  " . $result;
            } else {
                echo "  " . $food . " was left untouched.\n";
            }
        }
    }
}
