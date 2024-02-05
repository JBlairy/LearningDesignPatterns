<?php

namespace App\CreationalPatterns\Factory;

/** see https://refactoring.guru/design-patterns/factory-method */
class index
{
    public function __invoke()
    {
        /**
         * The Application picks a creator's type depending on the configuration or
         * environment.
         */
        echo "App: Launched with the ConcreteCreator1.\n";
        $this->clientCode(new ConcreteCreator1());
        echo "\n\n";

        echo "App: Launched with the ConcreteCreator2.\n";
        $this->clientCode(new ConcreteCreator2());
    }


    /**
     * The client code works with an instance of a concrete creator, albeit through
     * its base interface. As long as the client keeps working with the creator via
     * the base interface, you can pass it any creator's subclass.
     */
    private function clientCode(Creator $creator)
    {
        // ...
        echo "Client: I'm not aware of the creator's class, but it still works.\n"
            . $creator->someOperation();
        // ...
    }
}
