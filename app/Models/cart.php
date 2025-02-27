<?php

namespace App\Models;

class Cart
{
    public $items = [];

    public function addItem($id, $name, $price, $quantity = 1)
    {
        if (isset($this->items[$id])) {
            $this->items[$id]['quantity'] += $quantity;
        } else {
            $this->items[] = [
                'id' => $id,
                'name' => $name,
                'price' => $price,
                'quantity' => $quantity
            ];
        }
    }

    public function removeItem($id)
    {
        unset($this->items[$id]);
    }

    public function getItems()
    {
        // Debugging output
        return $this->items;
    }

    public function getTotal()
    {
        $total = 0;
        foreach ($this->items as $item) {
            $total += floatval($item['price']) * intval($item['quantity']);
;
        }
        return $total;
    }

    public function clear()
    {
        $this->items = [];
    }
}
