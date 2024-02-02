<?php

namespace App\BehavioralPatterns\Command\Exemple1;

class DefaultController
{
    public function __invoke()
    {
        $book = (new Book())
            ->setTitle('Design Patterns')
            ->setAuthor('Gamma, Helm, Johnson, et Vlissides')
        ;

        (new StarOnCommand($book))->execute();
        echo $book->display();  // Affiche: Design*Patterns par Gamma,*Helm,*Johnson,*et*Vlissides

        (new StarOffCommand($book))->execute();
        echo $book->display();  // Affiche: Design Patterns par Gamma, Helm, Johnson, et Vlissides
    }
}
