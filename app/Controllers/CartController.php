<?php

namespace App\Controllers;

use App\Models\Cart;

class CartController
{
    public function index()
    {
        session_start();
        $cart = $_SESSION['cart'] ?? new Cart();
        $_SESSION['cart'] = $cart;

        $items = $cart->getItems();
        $total = $cart->getTotal();

        $filePath = __DIR__ . "/../Views/cart.php";

        if (!file_exists($filePath)) {
        die("⚠️ ERREUR : Le fichier cart.php est introuvable à : " . $filePath);
            }
        include $filePath;

;
    }

    public function add()
    {
        session_start();
        if (!isset($_SESSION['cart'])) {
            $_SESSION['cart'] = new Cart();
        }

        $cart = $_SESSION['cart'];

        if (isset($_POST['id'], $_POST['name'], $_POST['price'])) {
            $cart->addItem($_POST['id'], $_POST['name'], $_POST['price'], $_POST['quantity'] ?? 1);
        }

        $_SESSION['cart'] = $cart;
        header("Location: /cart");
    }

    public function clear()
    {
        session_start();
        $_SESSION['cart'] = new Cart();
        header("Location: /cart");
    }
}
