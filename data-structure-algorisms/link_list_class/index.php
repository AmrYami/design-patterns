<?php


use Linkedlist\Linkedlist;

require __DIR__ . '/../../vendor/autoload.php';

$test = new Linkedlist();
$test->insertAtFront(5);
$test->insertAtFront(6);
$test->insertAtFront(7);
var_dump($test->print());

$test1 = new Linkedlist();
$test1->pushVal(5);
$test1->pushVal(6);
$test1->pushVal(7);
$test1->pushVal(8);

$test1->pushAfterSpecificNode(9, 8);
$test1->pushAfterSpecificNode(10, 9);

$test1->delete(10);
$test1->delete(9);
$test1->delete(20);
var_dump($test1->print());