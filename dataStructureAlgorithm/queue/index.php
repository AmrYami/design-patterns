<?php
require __DIR__ . '/../../vendor/autoload.php';
use Queue\Queue;
function info()
{
    try {
        $queue = new Queue();
        $queue->enqueue(5);
        $queue->enqueue(1);
        $queue->enqueue(2);
        $queue->enqueue(3);
        $queue->enqueue(4);
        $queue->enqueue("End");
        while(!$queue->isEmpty()){
            echo $queue->dequeue()."\n";
        }
    } catch (Exception $exception) {
        echo $exception->getMessage();
    }
}

info();