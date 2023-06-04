<?php
    require VENDOR;
    $page_title = "Palm Tree Strength";
    $sessions=\App\Session::getSessions();
?>
<div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner"></div>
    </div>

    
    <div class="container-fluid bg-dark px-5 d-none d-lg-block">
        <div class="row gx-0">
            <div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <small class="me-3 text-light"><i class="fa fa-map-marker-alt me-2"></i>33, avenue Mwepu, Lumbumbashi, RDC</small>
                    <small class="me-3 text-light"><i class="fa fa-phone-alt me-2"></i>+243 830 139 600</small>
                    <small class="text-light"><i class="fa fa-envelope-open me-2"></i>info@example.com</small>
                </div>
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
                <h1 class="m-0"><img src="../asset/img/palm.png" alt="icone" class="palm icone">Palm tree Strength</h1>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="#home" class="nav-item nav-link active">Home</a>
                    <a href="#about" class="nav-item nav-link">A propos</a>
                    <a href="#services" class="nav-item nav-link">Nos services</a>
                    <a class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Nos programmes
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">ASSU JOB</a>
                            <a class="dropdown-item" href="#">PTS IT LAB</a>
                            <a class="dropdown-item" href="#">BUSINESS CONSULTING</a>
                        </div>
                    </a>
                    <a href="#contact" class="nav-item nav-link">Contact</a>
                    <a href="/public/login" class="nav-item nav-link">Se connecter</a>
                </div>

            </div>
        </nav>

        <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="../asset/img/carousel-1.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <img src="../asset/img/palm(2).png" alt="photo palm">
                            <h1 class="display-1 text-white mb-md-4 animated zoomIn">Palm tree strength</h1>
                            <a href="#services" class="btn red-bg py-md-3 px-md-5 me-3 animated slideInLeft text-white">Nos services</a>
                            <a href="#contact" class="btn btn-outline-light py-md-3 px-md-5 animated slideInRight">Nous contactez</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="../asset/img/carousel-2.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h5 class="text-white text-uppercase mb-3 animated slideInDown">Creativité & Innovation</h5>
                            <h1 class="display-1 text-white mb-md-4 animated zoomIn">Creatives et innonvates solutions digitals</h1>
                            <a href="quote.html" class="btn red-bg py-md-3 px-md-5 me-3 animated slideInLeft text-white">Nos services</a>
                            <a href="" class="btn btn-outline-light py-md-3 px-md-5 animated slideInRight">Nous contactez</a>
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


    <!-- Facts Start -->
    <div class="container-fluid facts py-5 pt-lg-0">
        <div class="container py-5 pt-lg-0">
            <div class="row gx-0">
                <div class="col-lg-4 wow zoomIn" data-wow-delay="0.1s">
                    <div class="primary-background shadow d-flex align-items-center justify-content-center p-4" style="height: 150px;">
                        <div class="bg-white d-flex align-items-center justify-content-center rounded mb-2" style="width: 60px; height: 60px;">
                            <i class="fa fa-users primary-color"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="text-white mb-0">Clients satisfaits</h5>
                            <h1 class="text-white mb-0" data-toggle="counter-up">12345</h1>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow zoomIn" data-wow-delay="0.3s">
                    <div class="bg-light shadow d-flex align-items-center justify-content-center p-4 secondary_background" style="height: 150px;">
                        <div class="primary-background d-flex align-items-center justify-content-center rounded mb-2" style="width: 60px; height: 60px;">
                            <i class="fa fa-check text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="text-white mb-0">Cours</h5>
                            <h1 class="mb-0" data-toggle="counter-up">10</h1>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow zoomIn" data-wow-delay="0.6s">
                    <div class="primary-background shadow d-flex align-items-center justify-content-center p-4" style="height: 150px;">
                        <div class="bg-white d-flex align-items-center justify-content-center rounded mb-2" style="width: 60px; height: 60px;">
                            <i class="fa fa-award primary-color"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="text-white mb-0">Certificats</h5>
                            <h1 class="text-white mb-0" data-toggle="counter-up">12</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- About palm tree -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s" id="about" data-spy>
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-7">
                    <div class="section-title position-relative pb-3 mb-5">
                        <h5 class="fw-bold dark_color text-uppercase">A propos de nous</h5>
                        <h1 class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h1>
                    </div>
                    <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum et tempor sit. Aliqu diam amet diam et eos labore. Clita erat ipsum et lorem et sit, sed stet no labore lorem sit. Sanctus clita duo justo et tempor eirmod magna dolore erat amet</p>
                    <div class="row g-0 mb-3">
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.2s">
                            <h5 class="mb-3"><i class="fa fa-check red-color me-3"></i>flexibilité</h5>
                            <h5 class="mb-3"><i class="fa fa-check red-color me-3"></i>Professionnalisme</h5>
                        </div>
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.4s">
                            <h5 class="mb-3"><i class="fa fa-check red-color me-3"></i>Accompagnement</h5>
                            <h5 class="mb-3"><i class="fa fa-check red-color me-3"></i>Meilleures prix</h5>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-4 wow fadeIn" data-wow-delay="0.6s">
                        <div class="d-flex align-items-center justify-content-center rounded red-bg" style="width: 60px; height: 60px;">
                            <i class="fa fa-phone-alt text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="mb-2">Contactez nous pour tous renseignement</h5>
                            <h4 class="primary-color mb-0">+243 830 139 600</h4>
                        </div>
                    </div>
                    <a href="#contact" class="btn dark_bg py-3 px-5 mt-3 wow zoomIn text-white" data-wow-delay="0.9s">Nous écrire</a>
                </div>
                <div class="col-lg-5" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s" src="../asset/img/about.jpg" style="object-fit: cover;">
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- why choose us -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold dark_color text-uppercase">Pourquoi choisir palm tree strength</h5>
                <h1 class="mb-0">We Are Here to Grow Your Business Exponentially</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-4">
                    <div class="row g-5">
                        <div class="col-12 wow zoomIn" data-wow-delay="0.2s">
                            <div class="red-bg rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                <i class="fa fa-cubes text-white"></i>
                            </div>
                            <h4>Best In Industry</h4>
                            <p class="mb-0">Magna sea eos sit dolor, ipsum amet lorem diam dolor eos et diam dolor</p>
                        </div>
                        <div class="col-12 wow zoomIn" data-wow-delay="0.6s">
                            <div class="red-bg rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                <i class="fa fa-award text-white"></i>
                            </div>
                            <h4>Award Winning</h4>
                            <p class="mb-0">Magna sea eos sit dolor, ipsum amet lorem diam dolor eos et diam dolor</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4  wow zoomIn" data-wow-delay="0.9s" style="min-height: 350px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.1s" src="../asset/img/feature.jpg" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="row g-5">
                        <div class="col-12 wow zoomIn" data-wow-delay="0.4s">
                            <div class="red-bg rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                <i class="fa fa-users-cog text-white"></i>
                            </div>
                            <h4>Professional Staff</h4>
                            <p class="mb-0">Magna sea eos sit dolor, ipsum amet lorem diam dolor eos et diam dolor</p>
                        </div>
                        <div class="col-12 wow zoomIn" data-wow-delay="0.8s">
                            <div class="red-bg rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                <i class="fa fa-phone-alt text-white"></i>
                            </div>
                            <h4>24/7 Support</h4>
                            <p class="mb-0">Magna sea eos sit dolor, ipsum amet lorem diam dolor eos et diam dolor</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--Nos Services -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s" id="services" data-spy>
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold dark_color text-uppercase">Nos services</h5>
                <h1 class="mb-0">Custom IT Solutions for Your Successful Business</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon">
                            <i class="fa fa-shield-alt text-white"></i>
                        </div>
                        <h4 class="mb-3">Cyber Security</h4>
                        <p class="m-0">Amet justo dolor lorem kasd amet magna sea stet eos vero lorem ipsum dolore sed</p>
                        <a class="btn btn-lg red-bg rounded" href="">
                            <i class="bi bi-arrow-right text-white"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon">
                            <i class="fa fa-chart-pie text-white"></i>
                        </div>
                        <h4 class="mb-3">Data Analytics</h4>
                        <p class="m-0">Amet justo dolor lorem kasd amet magna sea stet eos vero lorem ipsum dolore sed</p>
                        <a class="btn btn-lg red-bg rounded" href="">
                            <i class="bi bi-arrow-right text-white"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.9s">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon">
                            <i class="fa fa-code text-white"></i>
                        </div>
                        <h4 class="mb-3">Web Development</h4>
                        <p class="m-0">Amet justo dolor lorem kasd amet magna sea stet eos vero lorem ipsum dolore sed</p>
                        <a class="btn btn-lg red-bg rounded" href="">
                            <i class="bi bi-arrow-right text-white"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon">
                            <i class="fab fa-android text-white"></i>
                        </div>
                        <h4 class="mb-3">Apps Development</h4>
                        <p class="m-0">Amet justo dolor lorem kasd amet magna sea stet eos vero lorem ipsum dolore sed</p>
                        <a class="btn btn-lg red-bg rounded" href="">
                            <i class="bi bi-arrow-right text-white"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon">
                            <i class="fa fa-search text-white"></i>
                        </div>
                        <h4 class="mb-3">SEO Optimization</h4>
                        <p class="m-0">Amet justo dolor lorem kasd amet magna sea stet eos vero lorem ipsum dolore sed</p>
                        <a class="btn btn-lg red-bg rounded" href=""²>
                            <i class="bi bi-arrow-right text-white"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.9s">
                    <div class="position-relative red-bg rounded h-100 d-flex flex-column align-items-center justify-content-center text-center p-5">
                        <h3 class="text-white mb-3">Contectez nous</h3>
                        <p class="text-white mb-3">Clita ipsum magna kasd rebum at ipsum amet dolor justo dolor est magna stet eirmod</p>
                        <h2 class="text-white mb-0">+243 830 139 600</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- formation session -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s" id="formation" data-spy>
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold dark_color text-uppercase">Sessions de formation</h5>
                <h1 class="mb-0">Nous offrons des prix compétitifs à nos clients</h1>
            </div>
            <div class="container d-flex justify-content-center flex-wrap">
                <?php if($sessions): ?>
                    <?php foreach ($sessions as $value):?>
                        <div class="m-1" data-wow-delay="0.3s" style="width:370px">
                            <div class="bg-white rounded shadow" style="z-index: 1;">
                                <div class="border-bottom py-4 px-5 mb-4">
                                    <h4 class="dark_color mb-1"><?=$value->intitule?></h4>
                                    <small class="text-uppercase"><?=$value->description?></small>
                                </div>
                                <div class="p-5 pt-0">
                                    <h1 class="display-5 mb-3">
                                        <small class="align-top" style="font-size: 22px; line-height: 45px;">$</small><?=$value->prixModule?><small
                                            class="align-bottom" style="font-size: 16px; line-height: 40px;">/ Module</small>
                                    </h1>
                                    <div class="d-flex justify-content-between mb-3"><span>Prix inscription</span><?=$value->prix?></div>
                                    <div class="d-flex justify-content-between mb-3"><span>Début</span><?=$value->debut?></div>
                                    <div class="d-flex justify-content-between mb-3"><span>Fin</span><?=$value->fin?></div>
                                    <div class="d-flex justify-content-between mb-2"><span>Nombres des modules</span><?=$value->nombreModule?></div>
                                    <a href="/public/client/inscription-<?=$value->idSession?>" class="btn py-2 px-4 mt-4 text-white red-bg">S'incrire</a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach ?>
                <?php else: ?>
                    <div class="alert alert-danger">Aucune session de formation pour l'instant</div>
                <?php endif ?>
            </div> 
        </div>          
    </div>



    <!-- Contactez nous -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s" id="contact" data-spy>
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-7">
                    <div class="section-title position-relative pb-3 mb-5">
                        <h5 class="fw-bold dark_color text-uppercase">Contactez nous</h5>
                        <h1 class="mb-0">Need A Free Quote? Please Feel Free to Contact Us</h1>
                    </div>
                    <p class="mb-4">Eirmod sed tempor lorem ut dolores. Aliquyam sit sadipscing kasd ipsum. Dolor ea et dolore et at sea ea at dolor, justo ipsum duo rebum sea invidunt voluptua. Eos vero eos vero ea et dolore eirmod et. Dolores diam duo invidunt lorem. Elitr ut dolores magna sit. Sea dolore sanctus sed et. Takimata takimata sanctus sed.</p>
                    <div class="d-flex align-items-center mt-2 wow zoomIn" data-wow-delay="0.6s">
                        <div class="red-bg d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
                            <i class="fa fa-phone-alt text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="mb-2">Appelez nous pour tous renseignement</h5>
                            <h4 class="dark_color mb-0">+243 830 139 600</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="primary-background rounded h-100 d-flex align-items-center p-5 wow zoomIn" data-wow-delay="0.9s">
                        <form>
                            <div class="row g-3">
                                <div class="col-xl-12">
                                    <input type="email" class="form-control bg-light border-0" placeholder="Votre adresse mail" style="height: 55px;">
                                </div>
                                <div class="col-12">
                                    <textarea class="form-control bg-light border-0" rows="3" placeholder="Message"></textarea>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-dark w-100 py-3" type="submit">Envoyer</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- Commentaire -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-4 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold dark_color text-uppercase">Commentaires</h5>
                <h1 class="mb-0">Ce que nos clients disent de nous</h1>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.6s">
                <div class="testimonial-item bg-light my-4">
                    <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                        <img class="img-fluid rounded" src="../asset/img/profil.jpeg" style="width: 60px; height: 60px;" >
                        <div class="ps-4">
                            <h4 class="red-color mb-1">Client Name</h4>
                            <small class="text-uppercase">Profession</small>
                        </div>
                    </div>
                    <div class="pt-4 pb-5 px-5">
                        Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam
                    </div>
                </div>
                <div class="testimonial-item bg-light my-4">
                    <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                        <img class="img-fluid rounded" src="../asset/img/profil.jpeg" style="width: 60px; height: 60px;" >
                        <div class="ps-4">
                            <h4 class="red-color mb-1">Client Name</h4>
                            <small class="text-uppercase">Profession</small>
                        </div>
                    </div>
                    <div class="pt-4 pb-5 px-5">
                        Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam
                    </div>
                </div>
                <div class="testimonial-item bg-light my-4">
                    <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                        <img class="img-fluid rounded" src="../asset/img/profil.jpeg" style="width: 60px; height: 60px;" >
                        <div class="ps-4">
                            <h4 class="red-color mb-1">Client Name</h4>
                            <small class="text-uppercase">Profession</small>
                        </div>
                    </div>
                    <div class="pt-4 pb-5 px-5">
                        Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam
                    </div>
                </div>
                <div class="testimonial-item bg-light my-4">
                    <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                        <img class="img-fluid rounded" src="../asset/img/profil.jpeg" style="width: 60px; height: 60px;" >
                        <div class="ps-4">
                            <h4 class="red-color mb-1">Client Name</h4>
                            <small class="text-uppercase">Profession</small>
                        </div>
                    </div>
                    <div class="pt-4 pb-5 px-5">
                        Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


    <!-- équipe -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold dark_color text-uppercase">Quelques membres de l'équipe</h5>
                <h1 class="mb-0">Une équipe des professionnelles prêtes à vous aidez</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                    <div class="team-item bg-light rounded overflow-hidden">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="../asset/img/team-1.jpg" alt="">
                            <div class="team-social">
                                <a class="btn btn-lg red-bg btn-lg-square rounded text-white" href=""><i class="fab fa-twitter fw-normal"></i></a>
                                <a class="btn btn-lg red-bg btn-lg-square rounded text-white" href=""><i class="fab fa-facebook-f fw-normal"></i></a>
                                <a class="btn btn-lg red-bg btn-lg-square rounded text-white" href=""><i class="fab fa-instagram fw-normal"></i></a>
                                <a class="btn btn-lg red-bg btn-lg-square rounded text-white" href=""><i class="fab fa-linkedin-in fw-normal"></i></a>
                            </div>
                        </div>
                        <div class="text-center py-4">
                            <h4 class="dark_color">Full Name</h4>
                            <p class="text-uppercase m-0">Designation</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.6s">
                    <div class="team-item bg-light rounded overflow-hidden">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="../asset/img/profil.jpeg" alt="">
                            <div class="team-social">
                                <a class="btn btn-lg red-bg btn-lg-square rounded text-white" href=""><i class="fab fa-twitter fw-normal"></i></a>
                                <a class="btn btn-lg red-bg btn-lg-square rounded text-white" href=""><i class="fab fa-facebook-f fw-normal"></i></a>
                                <a class="btn btn-lg red-bg btn-lg-square rounded text-white" href=""><i class="fab fa-instagram fw-normal"></i></a>
                                <a class="btn btn-lg red-bg btn-lg-square rounded text-white" href=""><i class="fab fa-linkedin-in fw-normal"></i></a>
                            </div>
                        </div>
                        <div class="text-center py-4">
                            <h4 class="dark_color">Full Name</h4>
                            <p class="text-uppercase m-0">Designation</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.9s">
                    <div class="team-item bg-light rounded overflow-hidden">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="../asset/img/profil.jpeg" alt="">
                            <div class="team-social">
                                <a class="btn btn-lg red-bg btn-lg-square rounded text-white" href=""><i class="fab fa-twitter fw-normal"></i></a>
                                <a class="btn btn-lg red-bg btn-lg-square rounded text-white" href=""><i class="fab fa-facebook-f fw-normal"></i></a>
                                <a class="btn btn-lg red-bg btn-lg-square rounded text-white" href=""><i class="fab fa-instagram fw-normal"></i></a>
                                <a class="btn btn-lg red-bg btn-lg-square rounded text-white" href=""><i class="fab fa-linkedin-in fw-normal"></i></a>
                            </div>
                        </div>
                        <div class="text-center py-4">
                            <h4 class="dark_color">Full Name</h4>
                            <p class="text-uppercase m-0">Designation</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Galérie -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold dark_color text-uppercase">Galérie</h5>
                <h1 class="mb-0">Read The Latest Articles from Our Blog Post</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                    <div class="blog-item bg-light rounded overflow-hidden">
                        <div class="blog-img position-relative overflow-hidden">
                            <img class="img-fluid" src="../asset/img/blog-1.jpg" alt="">
                            <a class="position-absolute top-0 start-0 red-bg text-white rounded-end mt-5 py-2 px-4" href="">Web Design</a>
                        </div>
                        <div class="p-4">
                            <div class="d-flex mb-3">
                                <small class="me-3"><i class="far fa-user primary-color me-2"></i>John Doe</small>
                                <small><i class="far fa-calendar-alt primary-color me-2"></i>01 Jan, 2045</small>
                            </div>
                            <h4 class="mb-3">How to build a website</h4>
                            <p>Dolor et eos labore stet justo sed est sed sed sed dolor stet amet</p>
                            <a class="text-uppercase red-color" href="">Read More <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.6s">
                    <div class="blog-item bg-light rounded overflow-hidden">
                        <div class="blog-img position-relative overflow-hidden">
                            <img class="img-fluid" src="../asset/img/blog-2.jpg" alt="">
                            <a class="position-absolute top-0 start-0 red-bg text-white rounded-end mt-5 py-2 px-4" href="">Web Design</a>
                        </div>
                        <div class="p-4">
                            <div class="d-flex mb-3">
                                <small class="me-3"><i class="far fa-user primary-color me-2"></i>John Doe</small>
                                <small><i class="far fa-calendar-alt primary-color me-2"></i>01 Jan, 2045</small>
                            </div>
                            <h4 class="mb-3">How to build a website</h4>
                            <p>Dolor et eos labore stet justo sed est sed sed sed dolor stet amet</p>
                            <a class="text-uppercase red-color" href="">Read More <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.9s">
                    <div class="blog-item bg-light rounded overflow-hidden">
                        <div class="blog-img position-relative overflow-hidden">
                            <img class="img-fluid" src="../asset/img/blog-3.jpg" alt="">
                            <a class="position-absolute top-0 start-0 red-bg text-white rounded-end mt-5 py-2 px-4" href="">Web Design</a>
                        </div>
                        <div class="p-4">
                            <div class="d-flex mb-3">
                                <small class="me-3"><i class="far fa-user primary-color me-2"></i>John Doe</small>
                                <small><i class="far fa-calendar-alt primary-color me-2"></i>01 Jan, 2045</small>
                            </div>
                            <h4 class="mb-3">How to build a website</h4>
                            <p>Dolor et eos labore stet justo sed est sed sed sed dolor stet amet</p>
                            <a class="text-uppercase red-color" href="">Read More <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>    

