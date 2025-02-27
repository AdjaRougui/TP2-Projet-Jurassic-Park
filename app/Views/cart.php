<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projet Restaurant</title>
        <link rel="stylesheet" href="../assets/css/bootstrap.min.css"> 
    
        <!-- CSS FILES -->      
        <link rel="preconnect" href="https://fonts.googleapis.com">
        
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600;700&display=swap" rel="stylesheet">                  
      
        <link href="../assets/css/bootstrap-icons.css" rel="stylesheet">

        <link href="../assets/css/tooplate-crispy-kitchen.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-lg bg-white shadow-lg">
            <div class="container">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                <a class="navbar-brand" href="index.html">
                    Jurassic Restaurant
                </a>

                <div class="d-lg-none">
                    <button type="button" class="custom-btn " data-bs-toggle="modal" data-bs-target="#BookingModal">Reservation</button>
                </div>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="index.html">Dinopedia</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="about.html">Hotels</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link active" href="/">Restaurant</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="news.html">Boutique</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="contact.html">Billeterie</a>
                        </li>
                    </ul>
                </div>

                <div class="d-none d-lg-block">
                <a href="/reservation">
                    <button type="button" class="custom-btn btn btn-danger" data-bs-toggle="modal" data-bs-target="#BookingModal">Reservation</button>
                </a>
                </div>

            </div>
        </nav>
<!--Votre panier -->
<h1>Votre panier</h1>
<?php if (empty($items)) : ?>
    <p>Votre panier est vide.</p>
<?php else : ?>
    <ul>
        <?php foreach ($items as $id => $item) : ?>
            <li><?= $item['name'] ?> - <?= $item['quantity'] ?> x <?= $item['price'] ?>€</li>
        <?php endforeach; ?>
    </ul>
    <p>Total: <?= $total ?>€</p>
    <a href="/cart/clear"> <button> Vider le panier </button></a>
<?php endif; ?>

<a href="/"> <Button> Retour au menu </Button></a>

</body>
</html>
