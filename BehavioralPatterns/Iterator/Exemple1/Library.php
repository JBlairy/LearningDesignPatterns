<?php

namespace App\BehavioralPatterns\Iterator\Exemple1;

use Iterator;

/**
 * Concrete Iterators implement various traversal algorithms. These classes
 * store the current traversal index at all times.
 */
class Library implements Iterator {
    private $books;
    private $index;

    public function __construct() {
        $this->books = array();
        $this->index = 0;
    }

    public function addBook($book) {
        $this->books[] = $book;
    }

    public function current() {
        return $this->books[$this->index];
    }

    public function next() {
        ++$this->index;
    }

    public function key() {
        return $this->index;
    }

    public function valid() {
        return isset($this->books[$this->index]);
    }

    public function rewind() {
        $this->index = 0;
    }
}
