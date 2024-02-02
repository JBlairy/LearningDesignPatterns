<?php

namespace App\BehavioralPatterns\ChainOfResponsibility\Exemple1;

class DefaultController
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
