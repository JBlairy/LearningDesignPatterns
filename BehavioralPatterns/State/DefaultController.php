<?php

namespace App\BehavioralPatterns\State;

class DefaultController
{
    public function __invoke()
    {
        $context = new Newsletter(new Draft());
        $context->markAsPublished();
        $context->markAsDraft();
        $context->markAsArchived();
    }
}
