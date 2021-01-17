<?php


namespace MediatorClasses;

use MediatorAbstracts\BookColleague;

class BookTitleColleague extends BookColleague
{
    private $title;
    private $state;

    function __construct($title_in, $mediator_in)
    {
        $this->title = $title_in;
        parent::__construct($mediator_in);
    }

    function getTitle()
    {
        return $this->title;
    }

    function setTitle($title_in)
    {
        $this->title = $title_in;
    }

    function getState()
    {
        return $this->state;
    }

    function setState($state_in)
    {
        $this->state = $state_in;
    }

    function setTitleUpperCase()
    {
        $this->setTitle(strtoupper($this->getTitle()));
        $this->setState('upper');
        $this->getMediator()->change($this);
    }

    function setTitleLowerCase()
    {
        $this->setTitle(strtolower($this->getTitle()));
        $this->setState('lower');
        $this->getMediator()->change($this);
    }
}
