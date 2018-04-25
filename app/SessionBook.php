<?php

namespace App;

class SessionBook {
    public $book_id;
    public $name;
    public $author;
    public $count;
    public $price;

    public function __construct ($id, $name, $author, $count, $price) {
        $this->book_id = $id;
        $this->author = $author;
        $this->name = $name;
        $this->count = $count;
        $this->price = $price;
    }
}