<?php


namespace TemplateInterfaces;


interface Hook
{
    public function getUserInput(string $answer): void;
}