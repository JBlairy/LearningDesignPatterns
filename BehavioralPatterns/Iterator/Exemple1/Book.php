<?php

namespace App\BehavioralPatterns\Iterator\Exemple1;

class Book
{
    private string $title;

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title): Book
    {
        $this->title = $title;
        return $this;
    }
}
