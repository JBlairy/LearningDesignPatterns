<?php

namespace App\CreationalPatterns\Builder;

/** see https://refactoring.guru/design-patterns/builder */
class index
{
    public function __invoke()
    {

        $director = new Director();
        $this->clientCode($director);
    }


    /**
     * The client code creates a builder object, passes it to the director and then
     * initiates the construction process. The end result is retrieved from the
     * builder object.
     */
    private function clientCode(Director $director)
    {
        $builder = new ConcreteBuilder1();
        $director->setBuilder($builder);

        echo "Standard basic product:\n";
        $director->buildMinimalViableProduct();
        $builder->getProduct()->listParts();

        echo "Standard full featured product:\n";
        $director->buildFullFeaturedProduct();
        $builder->getProduct()->listParts();

        // Remember, the Builder pattern can be used without a Director class.
        echo "Custom product:\n";
        $builder->producePartA();
        $builder->producePartC();
        $builder->getProduct()->listParts();
    }
}
