<?php

namespace App\BehavioralPatterns\Strategy;

class Library
{
    public function __construct(private Sort $sort)
    {
    }

    /**
     * Usually, the Context allows replacing a Strategy object at runtime.
     */
    public function setStrategy(Sort $sort)
    {
        $this->sort = $sort;
    }

    public function doSomeBusinessLogic(): void
    {
        // ...

        echo "Context: Sorting data using the strategy (not sure how it'll do it)\n";
        $result = $this->sort->sort(["a", "b", "c", "d", "e"]);
        echo implode(",", $result) . "\n";

        // ...
    }
}
