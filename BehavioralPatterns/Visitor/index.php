<?php

namespace App\BehavioralPatterns\Visitor;

/** see https://refactoring.guru/design-patterns/visitor */
class index
{
    public function __invoke()
    {
        $components = [
            new ConcreteComponentA(),
            new ConcreteComponentB(),
        ];

        echo "The client code works with all visitors via the base Visitor interface:\n";
        $visitor1 = new ConcreteVisitor1();
        $this->clientCode($components, $visitor1);
        echo "\n";

        echo "It allows the same client code to work with different types of visitors:\n";
        $visitor2 = new ConcreteVisitor2();
        $this->clientCode($components, $visitor2);
    }

    /**
     * The client code can run visitor operations over any set of elements without
     * figuring out their concrete classes. The accept operation directs a call to
     * the appropriate operation in the visitor object.
     */
    private function clientCode(array $components, Visitor $visitor)
    {
        // ...
        foreach ($components as $component) {
            $component->accept($visitor);
        }
        // ...
    }
}
