<?php

namespace App\StructuralPatterns\Adapter;

/** see https://refactoring.guru/design-patterns/adapter */
class index
{
    public function __invoke()
    {
        echo "Client: I can work just fine with the Target objects:\n";
        $target = new Target();
        $this->clientCode($target);
        echo "\n\n";

        $adaptee = new Adaptee();
        echo "Client: The Adaptee class has a weird interface. See, I don't understand it:\n";
        echo "Adaptee: " . $adaptee->specificRequest();
        echo "\n\n";

        echo "Client: But I can work with it via the Adapter:\n";
        $adapter = new Adapter($adaptee);
        $this->clientCode($adapter);
    }


    /**
     * The client code supports all classes that follow the Target interface.
     */
    private function clientCode(Target $target)
    {
        echo $target->request();
    }
}
