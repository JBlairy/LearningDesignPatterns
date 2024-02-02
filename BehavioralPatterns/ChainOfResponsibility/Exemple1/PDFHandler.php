<?php

namespace App\BehavioralPatterns\ChainOfResponsibility\Exemple1;

class PDFHandler extends AbstractDocumentHandler
{
    public function handle(Document $document): ?string
    {
        if ($document->getType() === 'pdf') {
            return "ExcelHandler: Document is pdf.\n";
        }

        return parent::handle($document);
    }
}
