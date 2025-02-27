<?php

namespace App\Models;

class Room
{
    public string $name;
    public string $description;
    public float $price;
    public string $image;

    public function __construct(string $name, string $description, float $price, string $image)
    {
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
        $this->image = $image;
    }

    public static function getAllRooms(): array
    {
        return [
            new Room("Chambre Luxe", "Chambre spacieuse avec vue sur la mer.", 120.00, "../assets/images/hotel/hotel1.jpg"),
            new Room("Chambre Standard", "Chambre confortable pour un séjour agréable.", 80.00, "../assets/images/hotel/hotely1.jpeg"),
            new Room("Suite Présidentielle", "Suite de luxe avec service VIP.", 250.00, "../assets/images/hotel/dinohotel1.jpg")
        ];
    }
}
