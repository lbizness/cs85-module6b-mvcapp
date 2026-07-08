<?php

namespace App\Models;

class Book{
    public $title;
    public $author;
    public $genre;

    public function displayBookInfo(){
        return "Title: " . $this->title . ", Author: " . $this->author . ", Genre: " . $this->genre;
    }
}