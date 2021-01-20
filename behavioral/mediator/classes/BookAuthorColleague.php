<?php


namespace MediatorClasses;



use MediatorAbstracts\BookColleague;

class BookAuthorColleague extends BookColleague
{
    private $author;
    private $state;

    function __construct($author_in, $mediator_in)
    {
        $this->author = $author_in;
        parent::__construct($mediator_in);
    }

    function getAuthor()
    {
        return $this->author;
    }

    function setAuthor($author_in)
    {
        $this->author = $author_in;
    }

    function getState()
    {
        return $this->state;
    }

    function setState($state_in)
    {
        $this->state = $state_in;
    }

    function setAuthorUpperCase()
    {
        $this->setAuthor(strtoupper($this->getAuthor()));
        $this->setState('upper');
        $this->getMediator()->change($this);
    }

    function setAuthorLowerCase()
    {
        $this->setAuthor(strtolower($this->getAuthor()));
        $this->setState('lower');
        $this->getMediator()->change($this);
    }
}
