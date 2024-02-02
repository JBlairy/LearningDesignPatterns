<?php

namespace App\BehavioralPatterns\ChainOfResponsibility\Exemple1;

class ExcelHandler extends AbstractDocumentHandler
{
    public function handle(Document $document): ?string
    {
        if ($document->getType() === 'xlsx') {
            return "ExcelHandler: Document is xls.\n";
        }

        return parent::handle($document);
    }
}
