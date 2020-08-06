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
    
    public function addBook($book)
    {
        $this->shelf[] = $book;
        return $this;
    }

    public function titles()
    {
        return $this->shelf->pluck("title")->all();
    }
}