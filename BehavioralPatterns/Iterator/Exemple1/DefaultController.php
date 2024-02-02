<?php

namespace App\BehavioralPatterns\Iterator\Exemple1;

class DefaultController
{
    public function __invoke()
    {
        $library = new Library();
        $library->addBook((new Book())->setTitle('Design Patterns'));
        $library->addBook((new Book())->setTitle('Refactoring'));

        /** @var Book $book */
        foreach ($library as $book) {
            echo $book->getTitle();
        }
    }
}
