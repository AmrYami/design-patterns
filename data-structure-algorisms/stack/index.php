<?php
require __DIR__."/../../vendor/autoload.php";

$stack = new \Stack\Stack();
$stack->push(5);
$stack->push(6);
$stack->push(7);
$stack->push(8);
$stack->push(9);
$stack->pop();
$stack->pop();

echo $stack->top();
echo '<br>';
echo $stack->isEmpty();
var_dump($stack->getStack());