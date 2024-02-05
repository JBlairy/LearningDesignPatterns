<?php

namespace App\CreationalPatterns\Singleton;

/** see https://refactoring.guru/design-patterns/singleton */
class index
{
    public function __invoke()
    {
        $s1 = Singleton::getInstance();
        $s2 = Singleton::getInstance();
        if ($s1 === $s2) {
            echo "Singleton works, both variables contain the same instance.";
        } else {
            echo "Singleton failed, variables contain different instances.";
        }
    }
}
