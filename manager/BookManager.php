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
    
    public function getBookList ()
    {
        $bdd = new PDO('mysql:host=localhost;dbname=bibliotheque;charset=utf8', 'root', '');
        $req = $bdd->query ("SELECT * FROM books");
        while (($row = $req->fetch(PDO::FETCH_ASSOC))!== FALSE)
        {
            echo $row["id"]." " .$row["title"]."</br>"; 
        }
        
        
    }
}
