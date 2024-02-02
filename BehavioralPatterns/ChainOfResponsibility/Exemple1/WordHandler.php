<?php

namespace App\BehavioralPatterns\ChainOfResponsibility\Exemple1;

class WordHandler extends AbstractDocumentHandler
{
    public function handle(Document $document): ?string
    {
        if ($document->getType() === 'docx') {
            return "ExcelHandler: Document is docx.\n";
        }

        return parent::handle($document);
    }
}
