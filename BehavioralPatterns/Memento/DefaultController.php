<?php

namespace App\BehavioralPatterns\Memento;

/** see https://refactoring.guru/design-patterns/memento */
class DefaultController
{
    public function __invoke()
    {
        $book = (new Book())->setTitle('Super-duper-super-puper-super.');
        $caretaker = new Caretaker($book);

        $caretaker->backup();
        $book->setTitle('New super title.');

        $caretaker->backup();
        $book->setTitle('New super title2.');

        $caretaker->backup();
        $book->setTitle('New super title3.');

        echo "\n";
        $caretaker->showHistory();

        echo "\nClient: Now, let's rollback!\n\n";
        $caretaker->undo();

        echo "\nClient: Once more!\n\n";
        $caretaker->undo();
    }
}
