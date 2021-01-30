<?php


namespace Queue;


class Queue
{
    private $front = null;
    private $back = null;

    public function isEmpty(){
        return  $this->front == null;
    }

    public function enQueue($value){
        $old = $this->back;
        $this->back = new Elements();
        $this->back->value = $value;
        if ($this->isEmpty()){
            $this->front = $this->back;
        }else{
            $old->next = $this->back;
        }
    }

    public function deQueue(){
        if ($this->isEmpty())
            return null;
        $removedItem = $this->front->value;
        $this->front = $this->front->next;
        return $removedItem;
    }
}