<?php

namespace App\BehavioralPatterns\ChainOfResponsibility\Exemple1;

interface DocumentHandler
{
    public function setNext(DocumentHandler $handler);
    public function handle(Document $document);
}
