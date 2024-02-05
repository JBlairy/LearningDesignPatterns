<?php

namespace App\StructuralPatterns\Decorator;

/** see https://refactoring.guru/design-patterns/decorator */
class index
{
    public function __invoke()
    {
        /**
         * This way the client code can support both simple components...
         */
        $simple = new ConcreteComponent();
        echo "Client: I've got a simple component:\n";
        $this->clientCode($simple);
        echo "\n\n";

        /**
         * ...as well as decorated ones.
         *
         * Note how decorators can wrap not only simple components but the other
         * decorators as well.
         */
        $decorator1 = new ConcreteDecoratorA($simple);
        $decorator2 = new ConcreteDecoratorB($decorator1);
        echo "Client: Now I've got a decorated component:\n";
        $this->clientCode($decorator2);

    }


    /**
     * The client code works with all objects using the Component interface. This
     * way it can stay independent of the concrete classes of components it works
     * with.
     */
    private function clientCode(Component $component)
    {
        // ...

        echo "RESULT: " . $component->operation();

        // ...
    }
}
