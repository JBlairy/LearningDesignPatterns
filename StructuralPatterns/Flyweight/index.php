<?php

namespace App\StructuralPatterns\Flyweight;

/** see https://refactoring.guru/fr/design-patterns/flyweight */
class index
{
    public function __invoke()
    {

        /**
         * The client code usually creates a bunch of pre-populated flyweights in the
         * initialization stage of the application.
         */
        $factory = new FlyweightFactory([
            ["Chevrolet", "Camaro2018", "pink"],
            ["Mercedes Benz", "C300", "black"],
            ["Mercedes Benz", "C500", "red"],
            ["BMW", "M5", "red"],
            ["BMW", "X6", "white"],
            // ...
        ]);
        $factory->listFlyweights();

        $this->addCarToPoliceDatabase($factory,
            "CL234IR",
            "James Doe",
            "BMW",
            "M5",
            "red",
        );

        $this->addCarToPoliceDatabase($factory,
            "CL234IR",
            "James Doe",
            "BMW",
            "X1",
            "red",
        );

        $factory->listFlyweights();
    }



    private function addCarToPoliceDatabase(
        FlyweightFactory $ff, $plates, $owner,
                         $brand, $model, $color
    ) {
        echo "\nClient: Adding a car to database.\n";
        $flyweight = $ff->getFlyweight([$brand, $model, $color]);

        // The client code either stores or calculates extrinsic state and passes it
        // to the flyweight's methods.
        $flyweight->operation([$plates, $owner]);
    }
}
