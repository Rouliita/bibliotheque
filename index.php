<?php
include ("manager/BookManager.php");
include ("model/Book.php");



$bookManager = new BookManager();

//$bookManager->createBook("author", "title", "type", new \DateTime(), "status");
//$bookManager->createBook("Axel Venet", "L'Or de Rome", "Roman historique", new \DateTime(), "neuf");

$bookManager->getBookList();
