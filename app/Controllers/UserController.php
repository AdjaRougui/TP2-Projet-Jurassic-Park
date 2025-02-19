<?php

namespace Controllers;
use Models\UserModel;
use Util\View;
use PDO;

class UserController{
    //inscription
    public static function incription(){
        if ($_SERVER['REQUEST_METHOD'] === 'POST'){
            $userModel = new UserModel();
            $username = $_POST["username"];
            $password = $_POST["password"];
            $email =$_POST["email"];
            $role = $_POST["role"] ? 'client' : "";  //le role du user par defaut est: client
            if ($userModel->inscription($username, $password, $email, $role)){
                echo "✅ Inscription Reussie 🥳";
            }
            else{
                echo "❌ Echec d'inscription 🥺";
            }
        }
    }
    public static function AfficherPageInscription(){
        $view = new View();
        $view->render('User/Inscription');
    }

    // connexion
    public function connexion(){
        if ($_SERVER['REQUEST_METHOD'] === 'POST'){
            $email = $_POST["email"];
            $password = $_POST["password"];
            $user = $this->userModel->connexion($email, $password);
            if ($user){
                echo "✅ Connexion Reussie. Bienvenue $user[username]";
            }
            else{
                echo "❌ Echec de connexion! ";
                echo "Identifiant ou mot de passe incorrect";
            }
        }
    }
    public static function afficherPageConnexion(){
        $view = new View();
        $view->render('user/connexion');
    }
}