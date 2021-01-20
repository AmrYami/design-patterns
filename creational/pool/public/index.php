<?php
require __DIR__ . '/../../../vendor/autoload.php';
use \PoolClasses\BookPool;

/**
 * @return int all books count and free books count
 */
function getInfo(){
    $book = new BookPool();
    $id = $book->rentBook();
    $id1 = $book->rentBook();
    $id2 = $book->rentBook();
    $book->freeBooks($id);
    return $book->allBooks() .':::::'. $book->getFreeBooksCount();
}



echo getInfo();