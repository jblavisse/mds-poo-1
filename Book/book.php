<?php

class Book {
    function __construct($title, $author, $price) {
        $this->title = $title;
        $this->author = $author;
        $this->price = $price;
    }

    function describe() {
        echo "Le livre a pour titre {$this->title}, pour auteur {$this->author} et coûte {$this->price} euros".PHP_EOL;
    }
}


$book1 = new Book("Les chevaliers d'émeraude", "Anne Robillard", 15.30);
$book1->describe();

$book2 = new Book("Le Seigneur des Anneaux", "JRR Tolkien", 17.2);
$book2->describe();

$book3 = new Book("Clean Code", "Robert C. Martin", 24);
$book3->describe();