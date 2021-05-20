<?php

namespace App;

class Cart
{
    public $items = null;
    public $price = 0;

    public function __construct($oldCart)
    {
        if ($oldCart) {
            $this->items = $oldCart->items;
            $this->price = $oldCart->price;
        }
    }

    public function add($item,$id)
    {
        $storedItem = ['qty' => 0, 'price' => $item->price,'title' => $item->title];

        if ($this->items) {
            if (array_key_exists($item->id, $this->items)) {
                $storedItem = $this->items[$id];
            }
        }

        $storedItem['qty']++;
        $storedItem['price'] = $item->price * $storedItem['qty'];
        $this->items[$id] = $storedItem;
        $this->price += $item->price;
    }

}
