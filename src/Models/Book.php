<?php

namespace App\Models;

class Book{
    public $file = "data/books.json";

    public function getBooks()
    {
        if (!file_exists($this->file)) {
            return [];
        }

        return json_decode(
            file_get_contents($this->file),
            true
        );
    }

    public function addBook($title, $author, $status)
    {
        $books = $this->getBooks();

        $books[] = [
            "title" => $title,
            "author" => $author,
            "status" => $status
        ];

        file_put_contents(
            $this->file,
            json_encode($books, JSON_PRETTY_PRINT)
        );
    }
}