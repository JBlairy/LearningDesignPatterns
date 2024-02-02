<?php

namespace App\BehavioralPatterns\Memento;


/**
 * The Concrete Memento contains the infrastructure for storing the Originator's
 * state.
 */
class ConcreteMemento implements Memento
{
    private $title;

    private $date;

    public function __construct(string $state)
    {
        $this->title = $state;
        $this->date = date('Y-m-d H:i:s');
    }

    /**
     * The Book uses this method when restoring its title.
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * The rest of the methods are used by the Caretaker to display metadata.
     */
    public function getName(): string
    {
        return $this->date . " / (" . substr($this->title, 0, 9) . "...)";
    }

    public function getDate(): string
    {
        return $this->date;
    }
}
