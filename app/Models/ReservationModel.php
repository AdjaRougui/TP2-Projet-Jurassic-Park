<?php
namespace App\Models;

use PDO;
use PDOException;

class ReservationModel
{
    private $pdo;

    public function __construct()
    {
        $host = "localhost";
        $dbname = "projet";
        $user = "root";
        $pass = "";

        try {
            $this->pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $pass);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Erreur de connexion : " . $e->getMessage());
        }
    }

    public function addReservation($name, $email, $phone, $date, $time, $guests)
    {
        $sql = "INSERT INTO reservations (name, email, phone, date, time, guests) VALUES (?, ?, ?, ?, ?, ?)";
        $stmt = $this->pdo->prepare($sql);
        return $stmt->execute([$name, $email, $phone, $date, $time, $guests]);
    }
}
?>
