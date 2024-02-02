<?php

namespace App\BehavioralPatterns\ChainOfResponsibility\Exemple1;

abstract class AbstractDocumentHandler implements DocumentHandler
{
    private $nextHandler;

    public function setNext(DocumentHandler $handler): DocumentHandler
    {
        $this->nextHandler = $handler;
        // Returning a handler from here will let us link handlers in a
        // convenient way like this:
        // $documentHandler->setNext($nextHandler)->setNext($otherNextHandler);
        return $handler;
    }

    public function handle(Document $document): ?string
    {
        if ($this->nextHandler) {
            return $this->nextHandler->handle($document);
        }

        return null;
    }
}
