<?php

class BookManager 
{
    public function createBook ($author, $title, $type, \DateTime $releaseDate, $status)
    {
        $book = new Book ();
        $book->author = $author;
        $book->title = $title;
        $book->type = $type;
        $book->releaseDate = $releaseDate;
        $book->acquisitionDate = new \DateTime();
        $book->status = $status;
        
        $book->insert();
    }
}
