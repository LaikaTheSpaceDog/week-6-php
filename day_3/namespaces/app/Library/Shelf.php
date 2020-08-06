<?php

namespace App\Library;
use Illuminate\Support\Collection;

class Shelf
{
    private $shelf;

    public function __construct()
    {
        $this->shelf = collect();
    }
    
    public function addBook(Book $book) : Shelf
    {
        $this->shelf[] = $book;
        return $this;
    }

    public function titles() : array
    {
        return $this->shelf->map(fn($book) => $book->title())->all();
    }
}