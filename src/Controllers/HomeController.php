<?php

namespace App\Controllers;

use App\Models\Book;


class HomeController{

public function index(){
    $book1 = new Book("The Great Gatsby", "F. Scott Fitzgerald", "Fiction");
    $book2 = new Book("To Kill a Mockingbird", "Harper Lee", "Fiction");
    $book3 = new Book("1984", "George Orwell", "Dystopian");

    $books = [$book1, $book2, $book3];

    $this->renderView('BookTracker', ['books' => $books]);
}

public function renderView($viewName, $data = []){
    extract($data);
    require"/Views/" . $viewName . ".php";
}


}