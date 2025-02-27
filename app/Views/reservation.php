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

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="/">Dinopedia</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="/hotel">Hotels</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="/">Restaurant</a>
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
        <div class="reservation">
                        <h2>Réserver une Table</h2>
                    <div class="modal-body d-flex flex-column justify-content-center">
                        <div class="booking">

                            <form action="/reservation" method="POST">
                                <label for="name">Nom :</label>
                                <br>
                                <input type="text" id="name" name="name" required>
                                <br>
                                <label for="email">Email :</label>
                                <br>
                                <input type="email" id="email" name="email" required>
                                <br>
                                <label for="phone">Téléphone :</label>
                                <br>
                                <input type="text" id="phone" name="phone" required>
                                <br>
                                <label for="date">Date :</label>
                                <br>
                                <input type="date" id="date" name="date" required>
                                <br>
                                <label for="time">Heure :</label>
                                <br>
                                <input type="time" id="time" name="time" required>
                                <br>
                                <label for="guests">Nombre de personnes :</label>
                                <br>
                                <input type="number" id="guests" name="guests" required>
                                <br>
                                <br>
                                <button id="reserver" type="submit">Réserver</button>
                            </form>
                    </div>
        </div>

</div>
<footer class="site-footer section-padding">
            
            <div class="container">
                
                <div class="row">

                    <div class="col-12">
                        <h4 class="text-white mb-4 me-5">Jurassic Restaurant</h4>
                    </div>

                    <div class="col-lg-4 col-md-7 col-xs-12 tooplate-mt30">
                        <h6 class="text-white mb-lg-4 mb-3">Location</h6>

                        <p>24 Rue Chapeau Rouge , Nantes </p>

                        <a href="https://goo.gl/maps/wZVGLA7q64uC1s886" class="custom-btn btn btn-dark mt-2">Directions</a>
                    </div>

                    <div class="col-lg-4 col-md-5 col-xs-12 tooplate-mt30">
                        <h6 class="text-white mb-lg-4 mb-3">Heure d'ouverture</h6>

                        <p class="mb-2">Lundi- Dimanche</p>

                        <p>10:00 - 22:00 </p>

                        <p>Tel: <a href="tel: 010-02-0340" class="tel-link">07-02-59-28</a></p>
                    </div>

                    <div class="col-lg-4 col-md-6 col-xs-12 tooplate-mt30">
                        <h6 class="text-white mb-lg-4 mb-3">Reseaux Sociaux</h6>

                        <ul class="social-icon">
                            <li><a href="#" class="social-icon-link bi-facebook"></a></li>

                            <li><a href="#" class="social-icon-link bi-instagram"></a></li>

                            <li><a href="#" class="social-icon-link bi-twitter"></a></li>

                            <li><a href="#" class="social-icon-link bi-youtube"></a></li>
                        </ul>
                    
                        <p class="copyright-text tooplate-mt60">Copyright © Onitina 2025
                        <br>Design: <a rel="nofollow" href="https://onitina  target="_blank">Projet G6</a></p>
                        
                    </div>

                </div><!-- row ending -->
                
             </div><!-- container ending -->
             
        </footer>
</body>
</html>
