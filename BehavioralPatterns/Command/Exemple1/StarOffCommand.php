<?php

namespace App\BehavioralPatterns\Command\Exemple1;

class StarOffCommand implements Command
{
    public function __construct(private Book $book) {
    }

    public function execute() {
        $this->book->setAuthor(str_replace('*', ' ', $this->book->getAuthor()));
        $this->book->setTitle(str_replace('*', ' ', $this->book->getTitle()));
    }
}
