<?php

namespace App\BehavioralPatterns\State;

class Archived extends State
{
    public function draft(): void
    {
        echo "Newsletter is archived, cannot mark as draft.\n";
    }

    public function publish(): void
    {
        echo "Newsletter is archived, cannot mark as published.\n";
    }

    public function archive(): void
    {
        echo "Newsletter already archived.\n";
    }
}
