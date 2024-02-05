<?php

namespace App\CreationalPatterns\AbstractFactory;

/** see https://refactoring.guru/design-patterns/abstract-factory */
class index
{
    public function __invoke()
    {
        /**
         * The client code can work with any concrete factory class.
         */
        echo "Client: Testing client code with the first factory type:\n";
        $this->clientCode(new ConcreteFactory1());

        echo "\n";

        echo "Client: Testing the same client code with the second factory type:\n";
        $this->clientCode(new ConcreteFactory2());
    }


    /**
     * The client code works with factories and products only through abstract
     * types: AbstractFactory and AbstractProduct. This lets you pass any factory or
     * product subclass to the client code without breaking it.
     */
    private function clientCode(AbstractFactory $factory)
    {
        $productA = $factory->createProductA();
        $productB = $factory->createProductB();

        echo $productB->usefulFunctionB() . "\n";
        echo $productB->anotherUsefulFunctionB($productA) . "\n";
    }
}
