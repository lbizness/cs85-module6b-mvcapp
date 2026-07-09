<?php

namespace App\Controllers;

use App\Models\Book;


class HomeController{
    public function index(): void
    {
        $bookModel = new Book();


    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $title = filter_input(INPUT_POST, 'title', FILTER_SANITIZE_SPECIAL_CHARS);
        $author = filter_input(INPUT_POST, 'author', FILTER_SANITIZE_SPECIAL_CHARS);
        $status = filter_input(INPUT_POST, 'status', FILTER_SANITIZE_SPECIAL_CHARS);

        $bookModel->addBook($title, $author, $status);
    }


        $books = $bookModel->getBooks();

        require __DIR__ . '/../views/BookTracker.php';
    }
}