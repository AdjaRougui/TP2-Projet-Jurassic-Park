
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
                <img src="../assets/images/logo jurassic.png"  width="100px" height="80px">
                <a class="navbar-brand" href="index.html">
                    Jurassic Restaurant
                </a>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="/">Dinopedia</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link active" href="/hotel">Hotels</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link " href="/">Restaurant</a>
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
    <section class="hero">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-5 col-12 m-auto">
                            <div class="heroText">

                                <h1 class="text-white mb-lg-5 mb-3">Bienvenue A Jurassic Parc</h1>
                                <p>Profitez d’un confort inégalé avec une vue imprenable sur la vallée des dinosaures. Laissez-vous bercer par les sons de la jungle dans nos suites haut de gamme.</p>
                                <button>Explorer </button>
                                <div class="c-reviews my-3 d-flex flex-wrap align-items-center">
                                    <div class="d-flex flex-wrap align-items-center">
                                        <h4 class="text-white mb-0 me-3">4.4/5</h4>

                                        <div class="reviews-stars">
                                            <i class="bi-star-fill reviews-icon"></i>
                                            <i class="bi-star-fill reviews-icon"></i>
                                            <i class="bi-star-fill reviews-icon"></i>
                                            <i class="bi-star-fill reviews-icon"></i>
                                            <i class="bi-star reviews-icon"></i>
                                        </div>
                                    </div>

                                    <p class="text-white w-100">From <strong>1,206+</strong> Customer Reviews</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-7 col-12">
                            <div id="carouselExampleCaptions" class="carousel carousel-fade hero-carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <div class="carousel-image-wrap">
                                            <img src="../assets/images/hotel/hotel1.jpg" class="img-fluid carousel-image" alt="">
                                        </div>
                                        
                                        <div class="carousel-caption">
                                            <span class="text-white">
                                                <i class="bi-geo-alt me-2"></i>
                                                Nantes,France
                                            </span>

                                            <h4 class="hero-text">Le villege de T-Rex</h4>
                                        </div>
                                    </div>

                                    <div class="carousel-item">
                                        <div class="carousel-image-wrap">
                                            <img src="../assets/images/hotel/hotely1.jpeg" class="img-fluid carousel-image" alt="">
                                        </div>
                                        
                                        <div class="carousel-caption">
                                            <div class="d-flex align-items-center">
                                                <h4 class="hero-text">Chambre double</h4>

                                                <span class="price-tag ms-4"><small>€</small>26.50</span>
                                            </div>

                                            <div class="d-flex flex-wrap align-items-center">
                                                <h5 class="reviews-text mb-0 me-3">3.8/5</h5>

                                                <div class="reviews-stars">
                                                    <i class="bi-star-fill reviews-icon"></i>
                                                    <i class="bi-star-fill reviews-icon"></i>
                                                    <i class="bi-star-fill reviews-icon"></i>
                                                    <i class="bi-star reviews-icon"></i>
                                                    <i class="bi-star reviews-icon"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="carousel-item">
                                        <div class="carousel-image-wrap">
                                            <img src="../assets/images/hotel/hotely4.jpg" class="img-fluid carousel-image" alt="">
                                        </div>
                                        
                                        <div class="carousel-caption">
                                            <div class="d-flex align-items-center">
                                                <h4 class="hero-text">Sausage Pasta</h4>

                                                <span class="price-tag ms-4"><small>€</small>18.25</span>
                                            </div>

                                            <div class="d-flex flex-wrap align-items-center">
                                                <h5 class="reviews-text mb-0 me-3">4.2/5</h5>

                                                <div class="reviews-stars">
                                                    <i class="bi-star-fill reviews-icon"></i>
                                                    <i class="bi-star-fill reviews-icon"></i>
                                                    <i class="bi-star-fill reviews-icon"></i>
                                                    <i class="bi-star-fill reviews-icon"></i>
                                                    <i class="bi-star reviews-icon"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>

                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="video-wrap">
                    <video autoplay="" loop="" muted="" class="custom-video" poster="">
                        <source src="../assets/images/videodino.mp4" type="video/mp4">
                        	Your browser does not support the video tag.
                    	</video>
                </div>

                <div class="overlay"></div>
            </section>
<!--section vaovao -->
 <section class="news section-padding">
                <div class="container">
                    <div class="row">

                        <h2 class="text-center mb-lg-5 mb-4">Nos chambres d'Hotel</h2>

                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="news-thumb mb-4">
                                <a href="/reservation">
                                    <img src="../assets/images/hotel/women.avif" class="img-fluid news-image" alt="">
                                </a>
                                
                                <div class="news-text-info news-text-info-large">
                                    <span class="category-tag bg-danger">Reserver</span>

                                    <h5 class="news-title mt-2">
                                        <a href="news-detail.html" class="news-title-link">Refuge de Velociraptor
                                        </a>
                                    </h5>
                                </div>
                            </div> 
                        </div>

                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="news-thumb mb-4">
                                <a href="/reservation">
                                    <img src="../assets/images/hotel/hotely2.jpg" class="img-fluid news-image" alt="">
                                </a>
                                
                                <div class="news-text-info news-text-info-large">
                                    
                                    <span class="category-tag bg-danger">Reserver</span>                                  

                                    <h5 class="news-title mt-2">
                                        <a href="news-detail.html" class="news-title-link">Le Refuge du T-Rex</a>
                                    </h5>
                                </div>
                            </div> 
                        </div>

                        <div class="col-lg-4 col-md-4 col-12">
                            <div class="news-thumb mb-lg-0 mb-lg-4 mb-0">
                                <a href="/reservation">
                                    <img src="../assets/images/hotel/bedroom.webp" class="img-fluid news-image" alt="">
                                </a>
                                
                                <div class="news-text-info">
                                    <span class="category-tag me-3 bg-info">Promotions</span>

                                    <strong>8 Avril 2025</strong>

                                    <h5 class="news-title mt-2">
                                        <a href="news-detail.html" class="news-title-link">Est-ce que vous aimez cette vue ?</a>
                                    </h5>
                                </div>
                            </div> 
                        </div>

                        <div class="col-lg-4 col-md-4 col-12">
                            <div class="news-thumb mb-lg-0 mb-lg-4 mb-2">
                                <a href="news-detail.html">
                                    <img src="../assets/images/news/caroline-attwood-bpPTlXWTOvg-unsplash.jpg" class="img-fluid news-image" alt="">
                                </a>
                                
                                <div class="news-text-info">
                                    <span class="category-tag">Les nouvelles</span>

                                    <h5 class="news-title mt-2">
                                        <a href="news-detail.html" class="news-title-link">Samon et crudite avec des pattes</a>
                                    </h5>
                                </div>
                            </div> 
                        </div>

                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="news-thumb mb-4">
                                <a href="news-detail.html">
                                    <img src="../assets/images/news/louis-hansel-GiIiRV0FjwU-unsplash.jpg" class="img-fluid news-image" alt="">
                                </a>
                                
                                <div class="news-text-info">
                                    <span class="category-tag me-3 bg-info">Meeting</span>

                                    <strong>30 Avril 2025</strong>

                                    <h5 class="news-title mt-2">
                                        <a href="news-detail.html" class="news-title-link">Nous vous donnez rendez-vous pour ce mois de salade</a>
                                    </h5>
                                </div>
                            </div> 
                        </div>

                    </div>
                </div>
</section>
  <!-- ROOM AJOUTES AVEC PHP DANS LE MODELE  -->
<section class="room">
    <h1 class="text" > Nos chambres </h1>
    <div class="chambre">
        <?php foreach ($rooms as $room): ?>
            <div class="room">
                <img src="<?= $room->image ?>" alt="<?= $room->name ?>" width="400px" height="300px">
                <h2><?= $room->name ?></h2>
                <p><?= $room->description ?></p>
                <p class="price"><?= number_format($room->price, 2) ?>€ / nuit</p>
                <a href="/reservation" class="btn">Réserver</a>
            </div>
        <?php endforeach; ?>
    </div>
</section>
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
            <!-- JAVASCRIPT FILES -->
        <script src="../assets/js/jquery.min.js"></script>
        <script src="../assets/js/bootstrap.bundle.min.js"></script>
        <script src="../assets/js/custom.js"></script>
</body>
</html>
