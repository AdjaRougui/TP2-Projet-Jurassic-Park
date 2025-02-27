<?php
namespace App\Controllers;

use App\Controller;
use App\Models\ReservationModel;

class ReservationController extends Controller
{
    // Affiche la page de réservation
    public function index()
    {
        $this->render("reservation");
    }

    // Gère la soumission du formulaire
    public function store()
    {
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $name = htmlspecialchars($_POST["name"]);
            $email = htmlspecialchars($_POST["email"]);
            $phone = htmlspecialchars($_POST["phone"]);
            $date = htmlspecialchars($_POST["date"]);
            $time = htmlspecialchars($_POST["time"]);
            $guests = htmlspecialchars($_POST["guests"]);

            $reservationModel = new ReservationModel();
            if ($reservationModel->addReservation($name, $email, $phone, $date, $time, $guests)) {
                echo "Réservation réussie !";
            } else {
                echo "Erreur lors de la réservation.";
            }
        }
    }
}
?>
