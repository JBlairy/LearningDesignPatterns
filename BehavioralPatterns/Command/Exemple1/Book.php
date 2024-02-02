<?php

namespace App\BehavioralPatterns\Command\Exemple1;

class Book
{
    private string $author;
    private string $title;

    public function display(): string
    {
        return $this->title . ' par ' . $this->author;
    }

    public function getAuthor(): string
    {
        return $this->author;
    }

    public function setAuthor(string $author): Book
    {
        $this->author = $author;
        return $this;
    }

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
