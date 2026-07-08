<?php

namespace App\Controllers;

use App\Models\Book;


class HomeController{

public Book $bookModel;

public function __construct(){
    $this->bookModel = new Book("", "", "");
}

public function index(){
    $book1 = new Book("Project Hail Mary", "Andy Weir", "Science Fiction");
    $book2 = new Book("The Murderbot Diaries", "Martha Wells", "Science Fiction");
    $book3 = new Book("1984", "George Orwell", "Dystopian");

    $books = [$book1, $book2, $book3];

    

    $this->renderView('BookTracker', ['books' => $books]);
}

public function renderView($viewName, $data = []){
    extract($data);
    require"/Views/" . $viewName . ".php";
}


}