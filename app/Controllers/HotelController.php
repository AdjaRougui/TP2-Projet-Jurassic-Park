<?php

namespace App\Controllers;

use App\Models\Room;

class HotelController
{
    public function index()
    {
        $rooms = Room::getAllRooms();
        include __DIR__ . "/../Views/hotel.php";
    }
}
