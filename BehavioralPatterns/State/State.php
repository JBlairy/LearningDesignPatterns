<?php

namespace App\BehavioralPatterns\State;


/**
 * The base State class declares methods that all Concrete State should
 * implement and also provides a backreference to the Newsletter object, associated
 * with the State. This backreference can be used by States to transition the
 * Newsletter to another State.
 */
abstract class State
{
    protected Newsletter $context;

    public function setContext(Newsletter $context)
    {
        $this->context = $context;
    }

    abstract public function publish(): void;

    abstract public function draft(): void;
    abstract public function archive(): void;
}
