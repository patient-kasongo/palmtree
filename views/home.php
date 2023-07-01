<?php

    require VENDOR;
    $page_title = "Palm Tree Strength : spécialiste dans la professionnalisation";
    $sessions=\App\Session::getSessions();
?>


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
    <section class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s" id="about" data-spy>
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-7">
                    <div class="section-title position-relative pb-3 mb-5">
                        <h5 class="fw-bold dark_color text-uppercase">A propos de nous</h5>
                        <h3 class="mb-0">PALM TREE STRENGTH sarl: Qui sommes nous?</h3>
                    </div>
                    <p class="mb-4">
                        Palm Tree Strength Sarl est une entreprise spécialisée dans la professionnalisation de la main d'ouevre,le coaching, le développement des solutions digitales, le business consulting, la traduction des documents scientifiques, l'interprétation et le Developpement des affaires en promouvant particulièrement l'Entrepreneuriat des jeunes
                    </p>
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
                    <a href="/public/#contact" class="btn dark_bg py-3 px-5 mt-3 wow zoomIn text-white" data-wow-delay="0.9s">Nous écrire</a>
                </div>
                <div class="col-lg-5" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s" src="../asset/img/about.jpg" style="object-fit: cover;">
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- why choose us -->
    <section class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold dark_color text-uppercase">Pourquoi choisir palm tree strength</h5>
                <h1 class="mb-0">Notre entreprise se distingue par :</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-4">
                    <div class="row g-5">
                        <div class="col-12 wow zoomIn" data-wow-delay="0.2s">
                            <div class="red-bg rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                <i class="fa fa-cubes text-white"></i>
                            </div>
                            <h4>Flexibilité</h4>
                            <p class="mb-0">Notre entreprise comprend que chaque client a des besoins uniques. Nous nous adaptons donc à vos exigences spécifiques en termes de calendrier, de contenu et de format de formation.</p>
                        </div>
                        <div class="col-12 wow zoomIn" data-wow-delay="0.6s">
                            <div class="red-bg rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                <i class="fa fa-award text-white"></i>
                            </div>
                            <h4>Professionnalisme</h4>
                            <p class="mb-0">Nous sommes fiers d'offrir des services professionnels de haute qualité</p>
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
                            <h4>Accompagnement</h4>
                            <p class="mb-0">Nous croyons en l'importance d'un suivi personnalisé avec nos clients. Que ce soit pour la formation, le coaching ou le consulting, nous restons engagés à vous accompagner tout au long du processus.</p>
                        </div>
                        <div class="col-12 wow zoomIn" data-wow-delay="0.8s">
                            <div class="red-bg rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                <i class="fa fa-phone-alt text-white"></i>
                            </div>
                            <h4>Meilleurs prix</h4>
                            <p class="mb-0"> Nous comprenons l'importance de rester compétitifs sur le marché. C'est pourquoi nous proposons des tarifs compétitifs pour nos services sans compromettre la qualité.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!--Nos Services -->
    <section class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s" id="services" data-spy>
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold dark_color text-uppercase">Nos services</h5>
                <h4 class="mb-0">Dans le but de satisfaire vos attentes, voici les differents services que nous vous offrons adapter à vos besoins</h4>
            </div>
            <div class="row g-5">
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon">
                            <i class="fa fa-shield-alt text-white"></i>
                        </div>
                        <h4 class="mb-3">Formation</h4>
                        <p class="m-0">Nous proposons une large gamme de programmes visant à développer les compétences et les connaissances nécessaires pour réussir dans différents domaines professionnels.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon">
                            <i class="fa fa-chart-pie text-white"></i>
                        </div>
                        <h4 class="mb-3">Coaching</h4>
                        <p class="m-0">Nous offrons un accompagnement personnalisé pour aider nos clients à atteindre leurs objectifs personnels et professionnels. </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.9s">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon">
                            <i class="fa fa-code text-white"></i>
                        </div>
                        <h4 class="mb-1">Solution digitale</h4>
                        <p class="m-0">Que ce soit pour créer une application mobile, développer un site web ou mettre en place une stratégie digitale efficace, nous mettons notre expertise technologique au service de nos clients.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon">
                            <i class="fab fa-android text-white"></i>
                        </div>
                        <h4 class="mb-1">Business consulting</h4>
                        <p class="m-0">Nous offrons des conseils stratégiques aux entreprises afin d'améliorer leur performance globale. Nous analysons les processus existants, identifions les lacunes et proposons des solutions innovantes.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon">
                            <i class="fa fa-search text-white"></i>
                        </div>
                        <h4 class="mb-1">Traductction et interprétation</h4>
                        <p class="m-0">Nous travaillons avec des traducteurs et des interprètes qualifiés pour garantir une traduction précise et une interprétation fluide dans différents domaines scientifiques.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.9s">
                    <div class="position-relative red-bg rounded h-100 d-flex flex-column align-items-center justify-content-center text-center p-5">
                        <h3 class="text-white mb-3">Contacts</h3>
                        <p class="text-white mb-3">Pour toute vos questions,préoccupations, demande d'informatiion, contactez-nous au</p>
                        <h2 class="text-white mb-0">+243 830 139 600</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- formation session -->
    <section class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s" id="formation" data-spy>
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
    </section>



    <!-- Contactez nous -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s" id="contact" data-spy>
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-7">
                    <div class="section-title position-relative pb-3 mb-5">
                        <h5 class="fw-bold dark_color text-uppercase">Contactez nous</h5>
                        <h1 class="mb-0">Contactez-nous dès maintenant pour tout problème ou demande d'assistance.</h1>
                    </div>
                    <p class="mb-4">
                        Nous souhaitons vous rappeler que notre équipe est à votre disposition pour toute question ou assistance concernant nos services. N'hésitez pas à nous contacter si vous rencontrez des difficultés ou si vous avez des préoccupations. Nous sommes là pour vous aider, Contactez-nous dès maintenant pour tout problème ou demande d'assistance.
                    </p>
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
                                    <input type="email" class="form-control bg-light border-0" placeholder="Votre adresse mail" style="height: 55px;" name="email">
                                </div>
                                <div class="col-12">
                                    <textarea class="form-control bg-light border-0" rows="3" placeholder="Message" name="message"></textarea>
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
                        <img class="img-fluid rounded" src="../asset/img/clementine.jpg" style="width: 60px; height: 60px;" >
                        <div class="ps-4">
                            <h4 class="red-color mb-1">Clémentine NGOIE</h4>
                            <small class="text-uppercase">Profession</small>
                        </div>
                    </div>
                    <div class="pt-4 pb-5 px-5">
                        Ce que j'apprécie chez Pts c'est la qualité de leurs offres et services ainsi que la fixation des coûts. Ils offrent leurs produits à des prix très professionnels comparativement à la concurrence
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
    <div id="team" class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
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
                        </div>
                        <div class="text-center py-4">
                            <h4 class="dark_color">Ntumba Dieudonné</h4>
                            <p class="text-uppercase m-0">DRH</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.6s">
                    <div class="team-item bg-light rounded overflow-hidden">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="../../asset/img/team-2.jpg" alt="">
                        </div>
                        <div class="text-center py-4">
                            <h4 class="dark_color">Bond Claver</h4>
                            <p class="text-uppercase m-0">Directeur des finances</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.9s">
                    <div class="team-item bg-light rounded overflow-hidden">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="../../asset/img/team-3.jpg" alt="">
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


