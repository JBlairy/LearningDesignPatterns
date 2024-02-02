<?php

namespace App\BehavioralPatterns\Memento;

/**
 * The Caretaker doesn't depend on the Concrete Memento class. Therefore, it
 * doesn't have access to the book's state, stored inside the memento. It
 * works with all mementos via the base Memento interface.
 */
class Caretaker
{
    /**
     * @var Memento[]
     */
    private $mementos = [];

    /**
     * @var Book
     */
    private $book;

    public function __construct(Book $book)
    {
        $this->book = $book;
    }

    public function backup(): void
    {
        echo "\nCaretaker: Saving book's state...\n";
        $this->mementos[] = $this->book->save();
    }

    public function undo(): void
    {
        if (!count($this->mementos)) {
            return;
        }
        $memento = array_pop($this->mementos);

        echo "Caretaker: Restoring state to: " . $memento->getName() . "\n";
        try {
            $this->book->restore($memento);
        } catch (\Exception $e) {
            $this->undo();
        }
    }

    public function showHistory(): void
    {
        echo "Caretaker: Here's the list of mementos:\n";
        foreach ($this->mementos as $memento) {
            echo $memento->getName() . "\n";
        }
    }
}
