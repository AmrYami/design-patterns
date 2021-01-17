<?php

namespace PoolClasses;

class BookPool
{
    /**
     * @var Book []
     */
    private $freeBooks = [];
    /**
     * @var Book []
     */
    private $rented = [];

    public function rentBook(): Book{
        if (count($this->freeBooks) == 0){
            $book = new Book();
        }else{
            $book = array_pop($this->freeBooks);
        }
        $this->rented[spl_object_hash($book)] = $book;
        return $book;
    }

    public function freeBooks(Book $book){
        $bookId = spl_object_hash($book);
        if (isset($this->rented[$bookId])){
            unset($this->rented[$bookId]);
            $this->freeBooks[$bookId] = $book;
        }
    }

    public function allBooks(): int{
        return count($this->rented) + count($this->freeBooks);
    }

    public function getFreeBooksCount(): int{
        return count($this->freeBooks);
    }
}