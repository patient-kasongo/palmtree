<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$page_title ?? 'palm tree strength'; ?></title>
    <meta content="palm tree strength" name="keywords">

    <link rel="icon" href="../../asset/img/iconepalm.png">

    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link href="../../asset/img/palm(2).png" rel="icon">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&family=Rubik:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="../../asset/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="../../asset/lib/animate/animate.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="../../asset/css/bootstrap.min.css" rel="stylesheet">

    <!-- vainq&pat Stylesheet -->
    <link href="../../asset/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="../../asset/css/print.css" type='text/css' media='print'>
</head>
<body>
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner"></div>
    </div>


    <div class="container-fluid bg-dark px-5 d-none d-lg-block">
        <div class="row gx-0">
            <div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0">
                <address class="d-inline-flex align-items-center" style="height: 45px;">
                    <small class="me-3 text-light"><i class="fa fa-map-marker-alt me-2"></i>33, avenue Mwepu, Lumbumbashi, RDC</small>
                    <small class="me-3 text-light"><i class="fa fa-phone-alt me-2"></i>+243 830 139 600</small>
                    <small class="text-light"><i class="fa fa-envelope-open me-2"></i>info@palmtreestrengh.com</small>
                </address>
            </div>
            <div class="col-lg-4 text-center text-lg-end">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-twitter fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-facebook-f fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-linkedin-in fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-instagram fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle" href=""><i class="fab fa-youtube fw-normal"></i></a>
                </div>
            </div>
        </div>
    </div>



    <!-- Navbar & Carousel Start -->
    <div class="container-fluid position-relative p-0" id="home" data-spy>
        <nav class="navbar navbar-expand-lg navbar-dark px-5 py-3 py-lg-0">
            <a href="" class="navbar-brand p-0">
                <h1 class="m-0"><img src="../../asset/img/palm.png" alt="icone" class="palm icone">Palm tree Strength</h1>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <nav class="navbar-nav ms-auto py-0">
                    <a href="/public/#home" class="nav-item nav-link active">Home</a>
                    <a href="/public/#about" class="nav-item nav-link">A propos</a>
                    <a href="/public/#services" class="nav-item nav-link">services</a>
                    <a href="/public/#programmes" class="nav-item nav-link">programmes</a>
                    <a href="/public/#formation" class="nav-item nav-link">Formations</a>
                    <a href="/public/#contact" class="nav-item nav-link">Contact</a>
                    <a href="/public/login" class="nav-item nav-link">Se connecter</a>
                </nav>

            </div>
        </nav>

        <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item
                    active">
                    <img class="w-100" src="../../asset/img/carousel-1.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <img src="../../asset/img/palm(2).png" alt="photo palm">
                            <h1 class="display-1 text-white mb-md-4 animated zoomIn">Palm tree strength</h1>
                            <a href="#services" class="btn red-bg py-md-3 px-md-5 me-3 animated slideInLeft text-white">Nos services</a>
                            <a href="#contact" class="btn btn-outline-light py-md-3 px-md-5 animated slideInRight">Nous contactez</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="../../asset/img/carousel-2.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h5 class="text-white text-uppercase mb-3 animated slideInDown">Creativité & Innovation</h5>
                            <h1 class="display-1 text-white mb-md-4 animated zoomIn">Creatives et innonvates solutions digitals</h1>
                            <a href="#services" class="btn red-bg py-md-3 px-md-5 me-3 animated slideInLeft text-white">Nos services</a>
                            <a href="#contact" class="btn btn-outline-light py-md-3 px-md-5 animated slideInRight">Nous contactez</a>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                    data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                    data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    <?= $contents ?? 'No found'?>

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light mt-5 wow fadeInUp footer" data-wow-delay="0.1s">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-4 col-md-6 footer-about">
                    <div class="d-flex flex-column align-items-center justify-content-center text-center h-100 secondary_background p-4">
                        <a href="/public" class="navbar-brand">
                            <h4 class="m-0 text-white">Palm tree strength</h4>
                        </a>
                        <p class="mt-3 mb-4">Contactez-nous dès maintenant pour tout problème ou demande d'assistance.</p>
                    </div>
                </div>
                <div class="col-lg-8 col-md-6">
                    <div class="row gx-5">
                        <address class="col-lg-4 col-md-12 pt-5 mb-5">
                            <div class="section-title section-title-sm position-relative pb-3 mb-4">
                                <h3 class="text-light mb-0">Nos coordonnées</h3>
                            </div>
                            <div class="d-flex mb-2">
                                <i class="bi bi-geo-alt red-color me-2"></i>
                                <p class="mb-0">33, avenue Mwepu, Lumbumbashi, RDC</p>
                            </div>
                            <div class="d-flex mb-2">
                                <i class="bi bi-envelope-open red-color me-2"></i>
                                <p class="mb-0">info@palmtreestrengh.com</p>
                            </div>
                            <div class="d-flex mb-2">
                                <i class="bi bi-telephone red-color me-2"></i>
                                <p class="mb-0">+243 830 139 600</p>
                            </div>
                            <div class="d-flex mt-4">
                                <a class="btn red-bg btn-square text-white me-2" href="#"><i class="fab fa-twitter fw-normal"></i></a>
                                <a class="btn red-bg btn-square text-white me-2" href="#"><i class="fab fa-facebook-f fw-normal"></i></a>
                                <a class="btn red-bg btn-square text-white me-2" href="#"><i class="fab fa-linkedin-in fw-normal"></i></a>
                                <a class="btn red-bg btn-square text-white" href="#"><i class="fab fa-instagram fw-normal"></i></a>
                            </div>
                        </address>
                        <div class="col-lg-4 col-md-12 pt-0 pt-lg-5 mb-5">
                            <div class="section-title section-title-sm position-relative pb-3 mb-4">
                                <h3 class="text-light mb-0">Liens rapide</h3>
                            </div>
                            <nav class="link-animated d-flex flex-column justify-content-start">
                                <a class="text-light mb-2" href="/public/#home"><i class="bi bi-arrow-right red-color me-2"></i>Acceuil</a>
                                <a class="text-light mb-2" href="/public/#about"><i class="bi bi-arrow-right red-color me-2"></i>A propos</a>
                                <a class="text-light mb-2" href="/public/#services"><i class="bi bi-arrow-right red-color me-2"></i>Nos services</a>
                                <a class="text-light mb-2" href="/public/#programmes"><i class="bi bi-arrow-right red-color me-2"></i>Nos programmes</a>
                                <a class="text-light mb-2" href="/public/#formations"><i class="bi bi-arrow-right red-color me-2"></i>Nos formations</a>
                                <a class="text-light" href="#contact"><i class="bi bi-arrow-right red-color me-2"></i>Nous contactez</a>
                            </nav>
                        </div>
                        <div class="col-lg-4 col-md-12 pt-0 pt-lg-5 mb-5">
                            <div class="section-title section-title-sm position-relative pb-3 mb-4">
                                <h3 class="text-light mb-0">Liens populaires</h3>
                            </div>
                            <div class="link-animated d-flex flex-column justify-content-start">
                                <a class="text-light mb-2" href="/public/#home"><i class="bi bi-arrow-right red-color me-2"></i>Acceuil</a>
                                <a class="text-light mb-2" href="/public/#about"><i class="bi bi-arrow-right red-color me-2"></i>A propos</a>
                                <a class="text-light mb-2" href="/public/#services"><i class="bi bi-arrow-right red-color me-2"></i>Nos services</a>
                                <a class="text-light mb-2" href="/public/#programmes"><i class="bi bi-arrow-right red-color me-2"></i>Nos programmes</a>
                                <a class="text-light mb-2" href="/public/#formations"><i class="bi bi-arrow-right red-color me-2"></i>Nos formations</a>
                                <a class="text-light" href="#contact"><i class="bi bi-arrow-right red-color me-2"></i>Nous contactez</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid text-white" style="background: #061429;">
        <div class="container text-center">
            <div class="row justify-content-end">
                <div class="col-lg-8 col-md-6">
                    <div class="d-flex align-items-center justify-content-center" style="height: 75px;">
                        <p class="mb-0">&copy; <a class="text-white border-bottom" href="#">Palm tree strength</a>. Tout droit réservé.
                            Designed by <a href="">PatientKASONGO</a> & <a href="">VainqueurKASUMBA</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg red-bg btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up text-white"></i></a>


    <script src="../../asset/js/spy.js"></script>
    <script src="../../asset/js/script.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../../asset/lib/wow/wow.min.js"></script>
    <script src="../../asset/lib/easing/easing.min.js"></script>
    <script src="../../asset/lib/waypoints/waypoints.min.js"></script>
    <script src="../../asset/lib/counterup/counterup.min.js"></script>
    <script src="../../asset/lib/owlcarousel/owl.carousel.min.js"></script>



    <!-- vainq&pat Javascript -->
    <script src="../../asset/js/main.js"></script>
</body>
</html>