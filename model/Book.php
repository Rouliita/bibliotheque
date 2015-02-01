<?php
class Book 
{
    public $author;
    public $title;
    public $type;
    public $releaseDate;
    public $acquisitionDate;
    public $status;
    
    public function insert()
    {
        $bdd = new PDO('mysql:host=localhost;dbname=bibliotheque;charset=utf8', 'root', '');
        $req = $bdd->prepare (
            'INSERT INTO books(author, title, type, release_date, acquisition_date, status) '
            . 'VALUES(:author, :title, :type, :release_date, :acquisition_date, :status)'
        );
        $req->execute(array(
            "author"=> $this->author,
            "title"=> $this->title,
            "type"=> $this->type,
            "release_date"=> $this->releaseDate->format(\DateTime::ISO8601),
            "acquisition_date"=> $this->acquisitionDate->format(\DateTime::ISO8601),
            "status"=> $this->status
        ));
    }
}
