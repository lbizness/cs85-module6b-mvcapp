<?php

namespace App\Controllers;

use App\Models\Book;


class HomeController{
    public function index(): void
    {
        $bookModel = new Book();
        $books = $bookModel->getBooks();

        include __DIR__ . '/../views/BookTracker.php';
    }
}