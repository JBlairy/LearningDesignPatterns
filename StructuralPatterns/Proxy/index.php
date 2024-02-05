<?php

namespace App\StructuralPatterns\Proxy;

use App\StructuralPatterns\Flyweight\FlyweightFactory;

/** see https://refactoring.guru/fr/design-patterns/proxy */
class index
{
    public function __invoke()
    {
        echo "Client: Executing the client code with a real subject:\n";
        $realSubject = new RealSubject();
        $this->clientCode($realSubject);

        echo "\n";

        echo "Client: Executing the same client code with a proxy:\n";
        $proxy = new Proxy($realSubject);
        $this->clientCode($proxy);
    }

    /**
     * The client code is supposed to work with all objects (both subjects and
     * proxies) via the Subject interface in order to support both real subjects and
     * proxies. In real life, however, clients mostly work with their real subjects
     * directly. In this case, to implement the pattern more easily, you can extend
     * your proxy from the real subject's class.
     */
    private function clientCode(Subject $subject)
    {
        // ...

        $subject->request();

        // ...
    }

}
