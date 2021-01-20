<?php

namespace Linkedlist;

class Linkedlist
{
    private Node|string|int|null $head = null;

    public function insertAtFront($val)
    {
        $newNode = new Node();
        $newNode->setValue($val);
        if ($this->head) {
            $newNode->setNext($this->head);
            $this->head = $newNode;
        } else {
            $this->head = $newNode;
        }
    }

    public function pushVal($val): void {
        $newNode = new Node();
        $newNode->setValue($val);
        if ($this->head){
            $current = $this->head;
            while ($current->getNext() != null){
                $current = $current->getNext();
            }
            $current->setNext($newNode);
        }else{
            $this->head = $newNode;
        }
    }

    public function pushAfterSpecificNode($value, $target): void {
        if ($this->head){
            $current = $this->head;
            while ($current->getValue() != $target && $current->getNext() != null){
                $current = $current->getNext();
            }
            if ($current->getValue()  == $target){
                $newNode = new Node();
                $newNode->setValue($value);
                $nextNode = $current->getNext();
                $current->setNext($newNode);
                $newNode->setNext($nextNode);
            }
        }
    }

    public function delete($target){
        if ($this->head){
            $current = $this->head;
            $previous = null;
            while ($current->getValue() != $target && $current->getNext() != null){
                $previous = $current;
                $current = $current->getNext();
            }
            if ($current->getValue() == $target){
                $previous->setNext($current->getNext());
                unset($current);
            }else if ($current->getNext()){
                $this->head = $current->getNext();
                unset($current);
            }
        }

    }

    public function print(){
        $current = $this->head;
        while ($current != null){
            echo $current->getValue();
            $current = $current->getNext();
            echo '<br>';
        }
    }
}
