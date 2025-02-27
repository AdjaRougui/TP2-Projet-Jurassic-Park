<!DOCTYPE html>
<html lang="en">
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

        <main>

            <header class="site-header site-menu-header">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-10 col-12 mx-auto">
                            <h1 class="text-white">Nos Menus</h1>

                            <strong class="text-white">Le meilleur pour le petit dejeuner , le diner , et le lunch</strong>
                        </div>

                    </div>
                </div>

                <div class="overlay"></div>
            </header>

            <section class="menu section-padding">
                <div class="container">
                    <div class="row">
                    <div class="col-12">
                        <h2 class="mb-lg-5 mb-4"> Menu petit dejeuner</h2>
                    </div>
                                
                    <?php
                    $menus = [
                        ["id" => 1, "name" => "Pancake", "price" => 16.50, "image" => "breakfast/lucas-swennen-1W_MyJSRLuQ-unsplash.jpg"],
                        ["id" => 2, "name" => "French Toast", "price" => 12.99, "image" => "breakfast/louis-hansel-dphM2U1xq0U-unsplash.jpg"],
                        ["id" => 3, "name" => "Baked Creamy", "price" => 10.50, "image" => "breakfast/brett-jordan-8xt8-HIFqc8-unsplash.jpg"],
                        ["id" => 4, "name" => "Saumon ", "price" => 16.50, "image" => "dinner/farhad-ibrahimzade-isHUj3N0194-unsplash.jpg"],
                        ["id" => 5, "name" => "Baked Creamy", "price" => 12.50, "image" => "dinner/farhad-ibrahimzade-ZipYER3NLhY-unsplash.jpg"],
                        ["id" => 6, "name" => "Bourguignon", "price" => 17.50, "image" => "dinner/keriliwi-c3mFafsFz2w-unsplash.jpg"],
                        ["id" => 6, "name" => "Bourguignon", "price" => 17.50, "image" => "lunch/lunch1.jpg"],
                        ["id" => 6, "name" => "Bourguignon", "price" => 17.50, "image" => "dinner/keriliwi-c3mFafsFz2w-unsplash.jpg"],
                        ["id" => 6, "name" => "Bourguignon", "price" => 17.50, "image" => "lunch/lunch2.jpg"],
                    ];

                    foreach ($menus as $menu) :
                    ?>
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="menu-thumb">
                                <img src="../assets/images/<?= $menu['image'] ?>" class="img-fluid menu-image" alt="">

                                <div class="menu-info d-flex flex-wrap align-items-center">
                                    <h4 class="mb-0"><?= htmlspecialchars($menu['name']) ?></h4>

                                    <span class="price-tag bg-white shadow-lg ms-4"><small>€</small><?= number_format($menu['price'], 2, '.', '') ?></span>

                                    <!-- Formulaire pour ajouter au panier -->
                                    <form action="/cart/add" method="post" class="w-100 mt-2">
                                        <input type="hidden" name="id" value="<?= $menu['id'] ?>">
                                        <input type="hidden" name="name" value="<?= htmlspecialchars($menu['name']) ?>">
                                        <input type="hidden" name="price" value="<?= number_format($menu['price'], 2, '.', '') ?>">
                                        <label for="quantity">Quantité :</label>
                                        <input type="number" name="quantity" value="1" min="1" class="form-control mb-2" style="width: 80px;">
                                        
                                        <button type="submit" class="btn  w-100">Ajouter au panier</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>


            <section class="menu section-padding">
                <div class="container">
                    <div class="row">

                        <div class="col-12">
                            <h2 class="mb-lg-5 mb-4">Menu du Dinner</h2>
                        </div>

                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="menu-thumb">
                                <img src="../assets/images/dinner/farhad-ibrahimzade-ZipYER3NLhY-unsplash.jpg" class="img-fluid menu-image" alt="">

                                <div class="menu-info d-flex flex-wrap align-items-center">
                                    <h4 class="mb-0">Fruits des mers</h4>

                                    <span class="price-tag bg-white shadow-lg ms-4"><small>€</small>65.50</span>

                                    <div class="d-flex flex-wrap align-items-center w-100 mt-2">
                                        <h6 class="reviews-text mb-0 me-3">4.4/5</h6>

                                        <div class="reviews-stars">
                                            <i class="bi-star-fill reviews-icon"></i>
                                            <i class="bi-star-fill reviews-icon"></i>
                                            <i class="bi-star-fill reviews-icon"></i>
                                            <i class="bi-star-fill reviews-icon"></i>
                                            <i class="bi-star reviews-icon"></i>
                                        </div>

                                        <p class="reviews-text mb-0 ms-4">102 Avis</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="menu-thumb">
                                <img src="../assets/images/dinner/keriliwi-c3mFafsFz2w-unsplash.jpg" class="img-fluid menu-image" alt="">

                                <div class="menu-info d-flex flex-wrap align-items-center">
                                    <h4 class="mb-0">Premium Steak</h4>

                                    <span class="price-tag bg-white shadow-lg ms-4"><small>€</small>74.25</span>

                                    <div class="d-flex flex-wrap align-items-center w-100 mt-2">
                                        <h6 class="reviews-text mb-0 me-3">3/5</h6>

                                        <div class="reviews-stars">
                                            <i class="bi-star-fill reviews-icon"></i>
                                            <i class="bi-star-fill reviews-icon"></i>
                                            <i class="bi-star-fill reviews-icon"></i>
                                            <i class="bi-star reviews-icon"></i>
                                            <i class="bi-star reviews-icon"></i>
                                        </div>

                                        <p class="reviews-text mb-0 ms-4">56 Avis</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="menu-thumb">
                                <img src="../assets/images/dinner/farhad-ibrahimzade-isHUj3N0194-unsplash.jpg" class="img-fluid menu-image" alt="">

                                <div class="menu-info d-flex flex-wrap align-items-center">
                                    <h4 class="mb-0">Salmon Set</h4>

                                    <span class="price-tag bg-white shadow-lg ms-4"><small>€</small>60</span>

                                    <div class="d-flex flex-wrap align-items-center w-100 mt-2">
                                        <h6 class="reviews-text mb-0 me-3">3/5</h6>

                                        <div class="reviews-stars">
                                            <i class="bi-star-fill reviews-icon"></i>
                                            <i class="bi-star-fill reviews-icon"></i>
                                            <i class="bi-star-fill reviews-icon"></i>
                                            <i class="bi-star reviews-icon"></i>
                                            <i class="bi-star reviews-icon"></i>
                                        </div>

                                        <p class="reviews-text mb-0 ms-4">76 Avis</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>

        </main>

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
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/custom.js"></script>

    </body>
</html>

</body>
</html>
