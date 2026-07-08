<?php

namespace App\Controllers;

use App\Models\Book;


class HomeController{
    private Book $bookModel;

    public function __construct()
    {
        $this->bookModel = new Book();
    }

    public function index()
    {
        $books = $this->bookModel->getBooks();

        include "views/books.php";
    }

    public function store()
    {
        if ($_SERVER["REQUEST_METHOD"] === "POST") {

            $title = trim($_POST["title"]);
            $author = trim($_POST["author"]);
            $status = trim($_POST["status"]);

            // Validate input
            if (
                empty($title) ||
                empty($author) ||
                empty($status)
            ) {
                die("All fields are required.");
            }

            $this->bookModel->addBook(
                $title,
                $author,
                $status
            );

            header("Location: index.php");
            exit;
        }
    }
}