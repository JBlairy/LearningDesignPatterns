<?php

namespace App\BehavioralPatterns\State;

/**
 * The Newsletter defines the interface of interest to clients. It also maintains a
 * reference to an instance of a State subclass, which represents the current
 * state of the Newsletter.
 */
class Newsletter
{
    /**
     * @var State reference to the current state of the Newsletter.
     */
    private State $state;
    public function __construct(State $state)
    {
        $this->transitionTo($state);
    }

    /**
     * The Newsletter allows changing the State object at runtime.
     */
    public function transitionTo(State $state): void
    {
        echo "Newsletter: Transition to " . get_class($state) . ".\n";
        $this->state = $state;
        $this->state->setContext($this);
    }

    /**
     * The Newsletter delegates part of its behavior to the current State object.
     */
    public function markAsDraft(): void
    {
        $this->state->draft();
    }

    public function markAsPublished(): void
    {
        $this->state->publish();
    }

    public function markAsArchived(): void
    {
        $this->state->archive();
    }
}
