<?php

namespace App\StructuralPatterns\Bridge;

/** see https://refactoring.guru/design-patterns/bridge */
class index
{
    public function __invoke()
    {
        /**
         * The client code should be able to work with any pre-configured abstraction-
         * implementation combination.
         */
        $implementation = new ConcreteImplementationA();
        $abstraction = new Abstraction($implementation);
        $this->clientCode($abstraction);

        echo "\n";

        $implementation = new ConcreteImplementationB();
        $abstraction = new ExtendedAbstraction($implementation);
        $this->clientCode($abstraction);
    }


    /**
     * Except for the initialization phase, where an Abstraction object gets linked
     * with a specific Implementation object, the client code should only depend on
     * the Abstraction class. This way the client code can support any abstraction-
     * implementation combination.
     */
    private function clientCode(Abstraction $abstraction)
    {
        // ...

        echo $abstraction->operation();

        // ...
    }
}
