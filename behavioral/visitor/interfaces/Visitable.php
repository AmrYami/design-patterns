<?php


namespace VisitorInterfaces;


interface Visitable
{
public function accept(Visitor $visitor): void;
}