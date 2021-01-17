<?php


require __DIR__ . '/../../../vendor/autoload.php';

use \MediatorMediators\BookMediator;
function info()
{
    try {

        writeln('BEGIN TESTING MEDIATOR PATTERN');
        writeln('');

        $mediator = new BookMediator('Gamma, Helm, Johnson, and Vlissides', 'Design Patterns');

        $author = $mediator->getAuthor();
        $title = $mediator->getTitle();

        writeln('Original Author and Title: ');
        writeln('author: ' . $author->getAuthor());
        writeln('title: ' . $title->getTitle());
        writeln('');

        $author->setAuthorLowerCase();

        writeln('After Author set to Lower Case: ');
        writeln('author: ' . $author->getAuthor());
        writeln('title: ' . $title->getTitle());
        writeln('');

        $title->setTitleUpperCase();

        writeln('After Title set to Upper Case: ');
        writeln('author: ' . $author->getAuthor());
        writeln('title: ' . $title->getTitle());
        writeln('');

        writeln('END TESTING MEDIATOR PATTERN');

    } catch (Exception $exception) {
        echo $exception->getMessage();
    }
}

info();

function writeln($line_in)
{
    echo $line_in . '<br/>';
}

