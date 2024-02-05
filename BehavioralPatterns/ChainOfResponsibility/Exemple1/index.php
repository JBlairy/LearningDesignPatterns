<?php

namespace App\BehavioralPatterns\ChainOfResponsibility\Exemple1;

class index
{
    public function __invoke()
    {
        $pdfHandler = new PDFHandler();
        $wordHandler = new WordHandler();
        $excelHandler = new ExcelHandler();
        $pdfHandler->setNext($wordHandler)->setNext($excelHandler);

        $document = new Document('docx');
        $pdfHandler->handle($document);
    }
}
