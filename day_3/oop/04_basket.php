<?php

require __DIR__ . "/vendor/autoload.php";

class Basket
{
    private $items = [];
    private $total = 0;

    public function add(BasketItem $purchase) : Basket
    {
        $this->total += $purchase->cost;
        $this->items[] = $purchase->item;
        return $this;
    }

    public function total() : float
    {
        return $this->total;
    }

    public function items() : array
    {
        return $this->items;
    }

}

class BasketItem
{
    public $item;
    public $cost;

    public function __construct(string $item, float $cost)
    {
        $this->item = $item;
        $this->cost = $cost;
    }
}

$basket = new Basket();

$item1 = new BasketItem("coffee", 3.50);
$item2 = new BasketItem("tea", 2.50);

$basket->add($item1);
$basket->add($item2);

dump($basket->total()); // £6.00
dump($basket->items()); // ["coffee","tea"]