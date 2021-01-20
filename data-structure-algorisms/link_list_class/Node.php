<?php

namespace Linkedlist;

class Node
{
    private string $value;
    private $next;

    public function setValue($value): void {
        $this->value = $value;
    }

    public function getValue(): int {
        return $this->value;
    }

    public function setNext($next): void {
        $this->next = $next;
    }

    public function getNext() {
        return $this->next;
    }
}