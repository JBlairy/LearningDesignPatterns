<?php

namespace App\StructuralPatterns\Composite;

/** see https://refactoring.guru/design-patterns/composite */
class index
{
    public function __invoke()
    {
        /**
         * This way the client code can support the simple leaf components...
         */
        $simple = new Leaf();
        echo "Client: I've got a simple component:\n";
        $this->clientCode($simple);
        echo "\n\n";

        /**
         * ...as well as the complex composites.
         */
        $tree = new Composite();
        $branch1 = new Composite();
        $branch1->add(new Leaf());
        $branch1->add(new Leaf());
        $branch2 = new Composite();
        $branch2->add(new Leaf());
        $tree->add($branch1);
        $tree->add($branch2);
        echo "Client: Now I've got a composite tree:\n";
        $this->clientCode($tree);
        echo "\n\n";

        echo "Client: I don't need to check the components classes even when managing the tree:\n";
        $this->clientCode2($tree, $simple);
    }


    /**
     * The client code works with all of the components via the base interface.
     */
    private function clientCode(Component $component)
    {
        // ...

        echo "RESULT: " . $component->operation();

        // ...
    }


    /**
     * Thanks to the fact that the child-management operations are declared in the
     * base Component class, the client code can work with any component, simple or
     * complex, without depending on their concrete classes.
     */
    private function clientCode2(Component $component1, Component $component2)
    {
        // ...

        if ($component1->isComposite()) {
            $component1->add($component2);
        }
        echo "RESULT: " . $component1->operation();

        // ...
    }
}
