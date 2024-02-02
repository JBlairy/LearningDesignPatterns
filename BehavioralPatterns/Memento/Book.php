<?php

namespace App\BehavioralPatterns\Memento;

/**
 * The Book(originator) holds some important state that may change over time. It also
 * defines a method for saving the state inside a memento and another method for
 * restoring the state from it.
 */
class Book
{
    /**
     * @var string For the sake of simplicity, the originator's title is stored
     * inside a single variable.
     */
    private string $title;

    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * The Book's business logic may affect its internal state. Therefore,
     * the client should backup the state before launching methods of the
     * business logic via the save() method.
     */
    public function setTitle(string $title): Book
    {
        $this->title = $title;
        return $this;
    }

    /**
     * Saves the current state inside a memento.
     */
    public function save(): ConcreteMemento
    {
        return new ConcreteMemento($this->title);
    }

    /**
     * Restores the Book's state from a memento object.
     */
    public function restore(ConcreteMemento $memento): void
    {
        $this->title = $memento->getTitle();
        echo "Book: My title has changed to: {$this->title}\n";
    }
}
