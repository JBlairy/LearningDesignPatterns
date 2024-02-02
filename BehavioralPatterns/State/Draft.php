<?php

namespace App\BehavioralPatterns\State;

class Draft extends State
{
    public function publish(): void
    {
        echo "Publish newsletter.\n";
        $this->context->transitionTo(new Published());
    }

    public function draft(): void
    {
        echo "Newsletter already draft.\n";
    }

    public function archive(): void
    {
        echo "Publish newsletter.\n";
        $this->context->transitionTo(new Archived());
    }
}
