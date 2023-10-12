<?php
    use Symfony\Component\Mailer\Transport;
use Symfony\Component\Mailer\Mailer;
use Symfony\Component\Mime\Email;
    require VENDOR;
    $page_title = "Palm Tree Strength : spécialiste dans la professionnalisation";
    $pageDescription="Palm Tree Strength sommes là pour vous accompagner dans votre parcours de développement en vous offrant des programmes et services de haute qualité";
    if(isset($_POST['email'],$_POST['message'],$_POST['phoneNumber'],$_POST['sujet'])){
        $transport = Transport::fromDsn("smtp://main@palmtreestrength.com:\"aT5@FGr63Dkjp\"@palmtreestrength.com:465");
        $mailer = new Mailer($transport);

        $content="adresse mail: ".$_POST['email'].PHP_EOL."numéro de téléphone: ".$_POST['phoneNumber'].PHP_EOL.$_POST['message'];

        $email = (new Email())
            ->to('patientkasongo45@gmail.com')
            ->from('main@palmtreestrength.com')
            ->subject($_POST['sujet'])
            ->text($content);
        try{
            $mailer->send($email);
        } catch (\TransportExceptionInterface $e){
            return false;
        }
    }
?>


    <!-- welcome -->
    <div class="welcome">
        <div class="container">
            <div class="row">
                <div class="col-md-10 offset-md-1">
                    <div class="text-center">
                        <div class="section-title text-center position-relative pb-3 mb-5">
                            <h1 class="text-white primary-background p-3 wow fadeInDown" data-wow-delay="0.1s" style="width: 300px; margin: 10px auto; border-radius: 40px">Bienvenue</h1>
                            <h2 class="wow lightSpeedIn" data-wow-delay="0.2s">Libérez votre potentiel</h2>
                        </div>
                        <p class="wow fadeInDown" data-wow-delay="0.3s">Nous sommes une entreprise innovante et dynamique spécialisée dans l’accompagnement des jeunes à travers les formations professionnelles pratiques pour leur intégration réussie dans le marché du travail et via la consultance dans le lancement, la stabilisation et la croissance des entreprises avec une touche particulière dans l’innovation technologique.</p>
                        <p class="wow fadeInDown" data-wow-delay="0.4s">Palm Tree Strength vous aide à développer vos compétences afin de réaliser vos objectifs personnel, professionnel et entrepreneurial en libérant votre plein potentiel.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end welcome -->

    <!-- About palm tree -->
    <section class="container-fluid py-5" data-wow-delay="0.1s" id="about">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-7">
                    <div class="section-title position-relative pb-3 mb-5">
                        <h3 class="mb-0 wow fadeInLeft" data-wow-delay="0.1s">Elan vers l’excellence avec Palm Tree Strength (Pts, au cœur de votre excellence)</h3>
                    </div>
                    <p class="mb-4 wow fadeInLeft" data-wow-delay="0.3s">
                        Nous sommes là pour vous accompagner dans votre parcours de développement en vous offrant des programmes et services de haute qualité adaptés à vos besoins et à la taille de vos défis.
                    </p>
                    <p class="mb-2 wow fadeInLeft" data-wow-delay="0.3s">
                        Grâce à notre équipe d’experts passionnés et professionnels, nous vous fournissons des outils nécessaires pour exceller dans votre domaine.
                    </p>
                    <p class="mb-2 wow fadeInLeft" data-wow-delay="0.3s">
                        Profitez dès à présent de :
                    </p>
                    <div class="row g-0 mb-3">
                        <div class="col-sm-6 wow fadeInLeft" data-wow-delay="0.4s">
                            <h5 class="mb-3 wow lightSpeedIn"><i class="fa fa-check red-color me-3"></i>Notre expertise et notre goût pour l’excellence</h5>
                            <h5 class="mb-3"><i class="fa fa-check red-color me-3"></i>Nos formations de qualité à coût réduit</h5>
                        </div>
                        <div class="col-sm-6 wow fadeInRight" data-wow-delay="0.5s">
                            <h5 class="mb-3"><i class="fa fa-check red-color me-3"></i>Notre accompagnement personnalisé (dans votre développement personnel et professionnel ou dans votre business)</h5>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-4" data-wow-delay="0.6s">
                        <div class="d-flex align-items-center justify-content-center rounded red-bg wow fadeInLeftBig" style="width: 60px; height: 60px;">
                            <i class="fa fa-phone-alt text-white"></i>
                        </div>
                        <div class="ps-4 wow fadeInRight" data-wow-delay="0.7s">
                            <h5 class="mb-2">Contactez-nous pour tous renseignement</h5>
                            <h4 class="primary-color mb-0">+243 830 139 600</h4>
                        </div>
                    </div>
                    <a href="/public/#contact" class="btn dark_bg py-3 px-5 mt-3 wow zoomIn text-white" data-wow-delay="0.9s">Nous écrire</a>
                </div>
                <div class="col-lg-5" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded wow fadeInDown" data-wow-delay="0.9s" src="../asset/img/ptscertificat.JPG" style="object-fit: cover;" alt="image about">
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- A propos -->
    <section class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold dark_color text-uppercase">A PROPOS DE NOUS</h5>
                <p>Notre vision est d’être au cœur de l’accompagnement des jeunes dans leur développement personnel, professionnel et entrepreneurial.</p>
            </div>
            <h2 class="text-center m-3">Notre Mission est de :</h2>
            <div class="row g-5">
                <div class="col-lg-4">
                    <div class="row g-5">
                        <div class="col-12 wow fadeInLeftBig" data-wow-delay="0.2s">
                            <div class="red-bg rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                <i class="fa fa-cubes text-white"></i>
                            </div>
                            <p class="mb-0">Professionnaliser et qualifier la main d’œuvre en offrant aux jeunes les compétences les plus recherchées dans le monde professionnel;</p>
                        </div>
                        <div class="col-12 wow fadeInLeftBig" data-wow-delay="0.6s">
                            <div class="red-bg rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                <i class="fa fa-award text-white"></i>
                            </div>
                            <p class="mb-0">Promouvoir l’entrepreneuriat des jeunes grâce à un accompagnement ou une assistance technique appropriée;</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4  wow fadeInDown" data-wow-delay="0.9s" style="min-height: 350px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded wow fadeInDown" data-wow-delay="0.1s" src="../asset/img/feature.jpg" style="object-fit: cover;" alt="future">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="row g-5">
                        <div class="col-12 wow fadeInRightBig" data-wow-delay="0.4s">
                            <div class="red-bg rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                <i class="fa fa-users-cog text-white"></i>
                            </div>
                            <p class="mb-0">Apporter des solutions innovantes aux problèmes de la société (grâce aux nouvelles technologies de l’information).</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center">
                <h2 class="text-center m-5">Nos valeurs sont :</h2>
            </div>
            <div class="row g-0 mb-3 text-center">
                <div class="col-4 wow zoomIn" data-wow-delay="0.2s">
                    <h5 class="mb-3"><i class="fa fa-check red-color me-3"></i>Innovation</h5>
                    <h5 class="mb-3"><i class="fa fa-check red-color me-3"></i>Différence</h5>
                </div>
                <div class="col-4 wow zoomIn" data-wow-delay="0.4s">
                    <h5 class="mb-3"><i class="fa fa-check red-color me-3"></i>Excellence</h5>
                    <h5 class="mb-3"><i class="fa fa-check red-color me-3"></i>Attitude</h5>
                </div>
                <div class="col-4 wow zoomIn" data-wow-delay="0.4s">
                    <h5 class="mb-3"><i class="fa fa-check red-color me-3"></i>Leadership</h5>
                </div>
            </div>
        </div>
    </section>
    <!-- end A propos -->

    <!--Nos Services et programmes -->
    <section class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s" id="programmes" data-spy>
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;" id="programmes">
                <h5 class="fw-bold dark_color text-uppercase">NOS PROGRAMMES ET SERVICES</h5>
                <p class="mb-0">Nos programmes sont conçus par nos experts évoluant dans la vie professionnelle réelle pour vous aider à relever vos défis en réalisant vos objectifs personnels et professionnels.</p>
            </div>
            <h2 class="text-center m-4">Il s’agit de trois principaux programmes :</h2>
            <div class="row g-5">
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon">
                            <i class="fa fa-shield-alt text-white"></i>
                        </div>
                        <h4 class="mb-3">PTS ASSUJOB</h4>
                        <p class="m-0">Un programme des formations professionnelles pratiques pour faciliter l’intégration et développement professionnel.</p>
                        <a class="btn btn-lg red-bg rounded" href="/public/assujob">
                            <i class="bi bi-arrow-right text-white"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon">
                            <i class="fa fa-chart-pie text-white"></i>
                        </div>
                        <h4 class="mb-3">PTS BUSINESS BOOST</h4>
                        <p class="m-0">Un programme de consultance pour accompagner les jeunes dans la création, gestion et croissance de leurs entreprises.</p>
                        <a class="btn btn-lg red-bg rounded" href="/public/ptsbussnessboot">
                            <i class="bi bi-arrow-right text-white"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.9s">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon">
                            <i class="fa fa-code text-white"></i>
                        </div>
                        <h4 class="mb-1">PTS HI-TECH REV</h4>
                        <p class="m-0">Un programme qui « offre des solutions informatiques innovantes pour digitaliser et simplifier la gestion courante des entreprises »</p>
                        <a class="btn btn-lg red-bg rounded" href="/public/HI-TECH-REV">
                            <i class="bi bi-arrow-right text-white"></i>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--Nos Services et programmes -->

    <!--start communauté -->
    <section class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s" data-spy>
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold dark_color text-uppercase">NOS COMMUNAUTÉS</h5>
            </div>
            <div class="row g-5">
                <div class="col-lg-6 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <h4 class="mb-3">PTS EAGLES’CLUB </h4>
                        <p class="m-0">C’est un Club des anglophones pour la promotion de la langue anglaise et le partage des opportunités d’emploi et de business parmi les membres du réseau.</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <h4 class="mb-3">PTS READERS’CLUB</h4>
                        <p class="m-0">C’est un club des jeunes, lecteurs de meilleurs livres du développement personnel pour découvrir la meilleure version d‘eux-mêmes à travers le partage d’expériences et leçons tirées des livres.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--end communauté -->

    <!--start investir -->
    <section class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s" id="investir" data-spy>
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-2 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold dark_color text-uppercase">INVESTIR</h5>
                <h4>Si voir la jeunesse se développer et réussir vous tient aussi à cœur, il y a plusieurs façons de l’accompagner ou investir dans ce que nous faisons :</h4>
            </div>
            <div class="row g-3">
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                    <div class="service-item rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <p class="m-0">1.	Investir dans un projet rentable d’un jeune bien formé et accompagné par notre équipe d’experts.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                    <div class="service-item rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <p class="m-0">2.	Sponsoriser certains jeunes dévoués, mais sans moyens d’accéder à certaines formations malgré le prix déjà réduit.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                    <div class="service-item rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <p class="m-0">3.	Faire un don pour soutenir la formation de la jeunesse, qui est l’une des conditions prioritaires du développement communautaire.</p>
                    </div>
                </div>
            </div>
            <div>
                <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="container py-5">
                        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                            <h1 class="mb-0">Voici les coordonnées bancaires pour vos contributions :</h1>
                        </div>
                        <div class="row g-5">
                            <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                                <div class="blog-item bg-light rounded overflow-hidden">
                                    <div class="blog-img position-relative overflow-hidden">
                                        <img class="img-fluid" src="../asset/img/equity.jpg" alt="">
                                        <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4" href="">EQUITY BCDC USD </a>
                                    </div>
                                    <div class="p-4">
                                        <h5 class="mb-3">USD : 166200062771905</h5>
                                        <h5 class="mb-3">CDF : 166200062767346</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 wow slideInUp" data-wow-delay="0.6s">
                                <div class="blog-item bg-light rounded overflow-hidden">
                                    <div class="blog-img position-relative overflow-hidden">
                                        <img class="img-fluid" src="../asset/img/access.jpeg" alt="">
                                        <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4" href="">Access Bank</a>
                                    </div>
                                    <div class="p-4">
                                        <h5 class="mb-3">USD : 000210060024113349501</h5>
                                        <h5 class="mb-3">CDF : 000210060024113349502</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 wow slideInUp" data-wow-delay="0.9s">
                                <div class="blog-item bg-light rounded overflow-hidden">
                                    <div class="blog-img position-relative overflow-hidden">
                                        <img class="img-fluid" src="../asset/img/mobile.png" alt="">
                                        <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4" href="">M-Pesa & Airtel money</a>
                                    </div>
                                    <div class="p-4">
                                        <h5 class="mb-3">M-pesa : +243 833 036 423</h5>
                                        <h5 class="mb-3">M-pesa : +243 973 310 885 </h5>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--end investir -->

    <!-- Contactez nous start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s" id="contact" data-spy>
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-7">
                    <div class="section-title position-relative pb-3 mb-5">
                        <h5 class="fw-bold dark_color text-uppercase wow fadeInUpBig" data-wow-delay="0.5s">Contactez-nous</h5>
                        <h1 class="mb-0 wow zoomInDown">Contactez-nous dès maintenant pour tout problème ou demande d'assistance.</h1>
                    </div>
                    <p class="mb-4 wow zoomInLeft">
                        Nous souhaitons vous rappeler que notre équipe est à votre disposition pour toute question ou assistance concernant nos services. N'hésitez pas à nous contacter si vous rencontrez des difficultés ou si vous avez des préoccupations. Nous sommes là pour vous aider, Contactez-nous dès maintenant pour tout problème ou demande d'assistance.
                    </p>
                    <div class="d-flex align-items-center mt-2 wow zoomIn" data-wow-delay="0.6s">
                        <div class="red-bg d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
                            <i class="fa fa-phone-alt text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="mb-2">Appelez-nous pour tous renseignement</h5>
                            <h4 class="dark_color mb-0">+243 830 139 600</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <img src="../asset/img/call.jpg" alt="">
                    <!--<div class="primary-background rounded h-100 d-flex align-items-center p-5 wow zoomIn" data-wow-delay="0.9s">
                        <form method="post">
                            <div class="row g-3">
                                <div class="col-xl-12">
                                    <input type="email" class="form-control bg-light border-0" placeholder="Votre adresse mail" style="height: 55px;" name="email" required>
                                </div>
                                <div class="col-xl-12">
                                    <input type="text" class="form-control bg-light border-0" placeholder="numéro de téléphone" style="height: 55px;" name="phoneNumber" required>
                                </div>
                                <div class="col-xl-12">
                                    <input type="text" class="form-control bg-light border-0" placeholder="sujet" style="height: 55px;" name="sujet" required>
                                </div>
                                <div class="col-12">
                                    <textarea class="form-control bg-light border-0" rows="3" placeholder="Message" name="message" required></textarea>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-dark w-100 py-3" type="submit">Envoyer</button>
                                </div>
                            </div>
                        </form>
                    </div>-->
                </div>
            </div>
        </div>
    </div>
    <!-- Contactez nous end -->


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
                        <img class="img-fluid rounded" src="../asset/img/clementine.jpg" style="width: 60px; height: 60px;" alt="image commentaire">
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
                        <img class="img-fluid rounded" src="../asset/img/profil.jpeg" style="width: 60px; height: 60px;" alt="image commentaire">
                        <div class="ps-4">
                            <h4 class="red-color mb-1">Jonathan MABIKA</h4>
                            <small class="text-uppercase">Agent commercial</small>
                        </div>
                    </div>
                    <div class="pt-4 pb-5 px-5">
                        Chez palm, je l'aime la méthodologie d'enseignement utilisé le learning by doing ’apprendre en agissant ´ et l'excellence dans tous les services
                    </div>
                </div>
                <div class="testimonial-item bg-light my-4">
                    <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                        <img class="img-fluid rounded" src="../asset/img/profil.jpeg" style="width: 60px; height: 60px;" alt="image commentaire">
                        <div class="ps-4">
                            <h4 class="red-color mb-1">Vainqueur KASUMBA</h4>
                            <small class="text-uppercase">étudiant en informatique</small>
                        </div>
                    </div>
                    <div class="pt-4 pb-5 px-5">
                        J'ai beaucoup aimé mon stage à pts, pts m'a donné l'occasion de m'exprimer et de proposer des solutions numériques
                    </div>
                </div>
                <div class="testimonial-item bg-light my-4">
                    <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                        <img class="img-fluid rounded" src="../asset/img/profil.jpeg" style="width: 60px; height: 60px;" alt="image commentaire">
                        <div class="ps-4">
                            <h4 class="red-color mb-1">Adèle YUMBA</h4>
                            <small class="text-uppercase">étudiante</small>
                        </div>
                    </div>
                    <div class="pt-4 pb-5 px-5">
                        J'ai été stagiaire à pts, et j'espère que pts va continuer sur la voix d'encourager et d'aider les jeunes
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- commentaire End -->

    <!-- équipe -->
    <!-- <div id="team" class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
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
    </div>-->
    <!-- carousel partenaire -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s" id="partenaires">
        <div class="container py-5 mb-5">
            <div class="bg-white">
                <div class="owl-carousel vendor-carousel">
                    <img src="../asset/img/partenaire/congoqueen.png" alt="">
                    <img src="../asset/img/partenaire/Artboard%202%20copy.png" alt="">
                    <img src="../asset/img/partenaire/CARTE%20IMANI_page-0001.jpg" alt="">
                    <img src="../asset/img/partenaire/eden.jpg" alt="">
                    <img src="../asset/img/partenaire/glint.JPG" alt="">
                    <img src="../asset/img/partenaire/imani.jpg" alt="">
                    <img src="../asset/img/partenaire/kiatu.png" alt="">
                    <img src="../asset/img/partenaire/LOGO%20DBM.jpg" alt="">
                    <img src="../asset/img/partenaire/logo%20mc.png" alt="">
                </div>
            </div>
        </div>
    </div>



