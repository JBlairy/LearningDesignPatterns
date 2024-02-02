<?php

namespace App\BehavioralPatterns\State;

class Published extends State
{
    public function draft(): void
    {
        echo "Newsletter is published, cannot mark as draft.\n";
    }

    public function publish(): void
    {
        echo "Newsletter already published.\n";
    }

    public function archive(): void
    {
        echo "Archive newsletter.\n";
        $this->context->transitionTo(new Archived());
    }
}
