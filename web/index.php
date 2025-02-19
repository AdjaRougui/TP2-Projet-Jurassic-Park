<?php
require '../vendor/autoload.php';
#use Controllers\userController;

// on lance le serveur sans option -t : php localhost:8000
// l'url est http://localhost:8000/articles/10/toto

$dispatcher = FastRoute\simpleDispatcher(function(FastRoute\RouteCollector $r) {

    $r->get('/', function() {
        echo 'home page goes here';
    });
//le 3eme param de addRoute: handler peut etre une fonction du meme fichier, tab de [var,nom_methode_a_appeler] avec var qui se trouve etre l'instanciation d'une autre class ou objet
    // ou meme un tableau composé [clase_referencee ::class, nom_methode_a_appele] avec class_reference le nom de la clase referencee et nom_methode_a_appele la methode de la classe
    $r->addRoute("POST", '/web/Connexion', [\Controllers\UserController::class, 'connexion']);
    $r->addRoute("GET","/web/Connexion", [Controllers\UserController::class, 'afficherPageConnexion']);

    $r->addRoute('POST', '/web/Inscription', [\Controllers\userController::class,'inscription']);
    $r->addRoute("GET","/web/Inscription", [\Controllers\userController::class, 'AfficherPageInscription']);

    $r->addRoute('GET', '/web/Hello', ['Hello','sayHello']);



    $r->get('/web/books/{id}', function ($args) {
        // Show book identified by $args['id']
        echo "Book #" . $args['id'];
    });

    // {id} must be a number (\d+)
    $r->addRoute('GET', '/web/user/{id:\d+}', function ($args) {
        echo "User #" . $args['id'];
    });
    // The /{title} suffix is optional2
    $r->addRoute('GET', '/web/articles/{id:\d+}[/{title}]', function ($args) {
        echo "User #" . $args['id'];
        echo "<br>Title: " . $args['title'];
    });
});

function getUsers()
{
    echo "getUsers function action goes here...";
}

class Hello{
    static function sayHello(){
        echo "Hello world";
        echo "ça y est, ça marche, ouuuuuhhhhhhhhhhh";
    }
}

////--------------

// A NE PAS MODIFIER !!!

// Fetch method and URI from somewhere
$httpMethod = $_SERVER['REQUEST_METHOD'];
$uri = $_SERVER['REQUEST_URI'];

// Strip query string (?foo=bar) and decode URI
if (false !== $pos = strpos($uri, '?')) {
    $uri = substr($uri, 0, $pos);
}
$uri = rawurldecode($uri);



$routeInfo = $dispatcher->dispatch($httpMethod, $uri);

switch ($routeInfo[0]) {
    case FastRoute\Dispatcher::NOT_FOUND:
        die('NOT_FOUND');
        // ... 404 Not Found
        break;
    case FastRoute\Dispatcher::METHOD_NOT_ALLOWED:
        $allowedMethods = $routeInfo[1];
        // ... 405 Method Not Allowed
        die('Not Allowed');
        break;
    case FastRoute\Dispatcher::FOUND:
        $handler = $routeInfo[1];
        $vars = $routeInfo[2];

        print $handler($vars);
        break;
}