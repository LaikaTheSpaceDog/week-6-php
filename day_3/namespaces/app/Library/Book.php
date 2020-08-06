<?php

namespace App\Library;

class Book 
{
    private $title;
    private $pages;
    private $currentPage = 1;

    public function __constructor($title, $pages)
    {
        $this->title = $title;
        $this->pages = $pages;
    }

    public function read($num)
    {
        $this->currentPage += $num;
        return $this;
    }

    public function currentPage()
    {
        return $this->currentPage;
    }

}