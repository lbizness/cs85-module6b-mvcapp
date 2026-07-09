<?php

namespace App\Models;

class Book{
    private array $books = [
        ["title" => "The Great Gatsby", "author" => "F. Scott Fitzgerald", "status" => "Read"],
            ["title" => "To Kill a Mockingbird", "author" => "Harper Lee", "status" => "Unread"],
            ["title" => "1984", "author" => "George Orwell", "status" => "Read"]
            ];

    public function getBooks(): array
    {
        return $this->books;
    }

    public function addBook(string $title, string $author, string $status): void
    {
        $this->books[] = ["title" => $title, "author" => $author, "status" => $status];
    }
}