<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jobpaw | professionals</title>
    <!-- favicons Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="../assets/images/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../assets/images/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicons/favicon-16x16.png">
    <link rel="manifest" href="../assets/images/favicons/site.webmanifest">
    <meta name="description"
        content="Hiredots is a modern HTML Template HR services, Recruiting Agency, Recruiting Business, Hire Employees, Recruiting Consulting, Job Posting, Interviewing Services websites and businesses.">

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <!-- reey font -->
    <link rel="stylesheet" href="../assets/vendors/reey-font/stylesheet.css">


    <link rel="stylesheet" href="../assets/vendors/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/vendors/bootstrap-select/bootstrap-select.min.css">
    <link rel="stylesheet" href="../assets/vendors/animate/animate.min.css">
    <link rel="stylesheet" href="../assets/vendors/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="../assets/vendors/jquery-ui/jquery-ui.css">
    <link rel="stylesheet" href="../assets/vendors/jarallax/jarallax.css">
    <link rel="stylesheet" href="../assets/vendors/jquery-magnific-popup/jquery.magnific-popup.css">
    <link rel="stylesheet" href="../assets/vendors/nouislider/nouislider.min.css">
    <link rel="stylesheet" href="../assets/vendors/nouislider/nouislider.pips.css">
    <link rel="stylesheet" href="../assets/vendors/slick/slick.css">
    <link rel="stylesheet" href="../assets/vendors/hiredots-icons/style.css">
    <link rel="stylesheet" href="../assets/vendors/owl-carousel/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../assets/vendors/owl-carousel/css/owl.theme.default.min.css">

    <!-- template styles -->
    <link rel="stylesheet" href="../assets/css/hiredots.css">
</head>

<body class="custom-cursor">

    <div class="custom-cursor__cursor"></div>
    <div class="custom-cursor__cursor-two"></div>

    <div class="preloader">
        <div class="preloader__image" style="background-image: url(../assets/images/loader.png);"></div>
    </div>
    <header class="main-header sticky-header sticky-header--normal">
        <?php
        $title = 'Home';
        $page = 'home';
        $professionels = '/professionals';
        $entreprises = '/entreprises';
        $universities = '/universities';
        $services = 'services.php';
        $projects = '';
        include_once ('../component/navBar.php');
        ?>
    </header>
    <!-- main-slider-start -->
    <div>
        <section class="page-header">
            <div class="page-header__bg"></div>
            <div class="page-header__shape">
                <img src="./images/shapes/page-header-shape.png" alt="hiredots">
            </div>
            <div class="container">
                <h2 class="page-header__title">Monter son entreprise</h2>
                <ul class="hiredots-breadcrumb list-unstyled">
                    <li>
                        <a href="/">Home</a>
                    </li>
                    <li>
                        <span>Professionals / Monter son entreprise</span>
                    </li>
                </ul>
            </div>
        </section>
    </div>
    <!-- main-slider-end -->
    <!-- Feature Start -->
    <div class="my-5">
        <section class="">
            <div class="container">
                <div>
                    Monter une entreprise requiert trois éléments fondamentaux que nous allons développer : Quoi – Quoi
                    produire, dans quel secteur porteur investir ou entreprendre, Qui – Avec qui produire, avec qui
                    collaborer et s’associer pour produire et Comment – Comment produire, comment combiner ressources
                    humaines, techniques et financières pour produire. <br /><br />
                    Cliquez ici et avisez-nous si êtes une entreprise ou un professionnel certifié et si vous voulez
                    être notre partenaire dans un domaine. <br /><br />
                    Vous pourrez commenter et partager toute information utile sur ce sujet dans la section commentaires
                </div>
                <div class="row gutter-y-30" id="projects-container">
                    <!-- JavaScript will populate this container -->
                </div>
                <div class="my-5">
                    <h5>Monter une entreprise</h5>
                    <p>Monter une entreprise requiert trois éléments fondamentaux que nous allons développer :</p>

                    <h5>Quoi produire ?</h5>
                    <p>A propos de l’enjeu de <strong>quoi</strong>, du secteur profitable dans lequel investir, des
                        récentes recherches ont suggéré de donner priorité aux secteurs à forte demande induite. Il
                        s’agit de regarder les biens et services très demandés et chercher une option d’offrir un bien
                        ou service dérivé.</p>
                    <p>Un simple coup d’œil autour de son environnement immédiat devrait aider à identifier ces biens.
                        Une analyse approfondie des statistiques sur le PIB (source IHSI, BRH, MEF, etc.) permet aussi
                        de voir les biens (et leurs secteurs) produits et demandés dans l’économie.</p>
                    <p>Les entrepreneurs aguerris ou sophistiqués pourront aller au-delà des biens à forte demande
                        dérivée pour explorer des biens innovants.</p>
                    <p>L’examen des projets (incluant actions et mesures) de l’Etat inclus dans le budget et relayées <a
                            href="#">ici</a> donne une idée des orientations des dépenses et des achats.</p>
                    <p>La connaissance anticipée des biens et services qui seront achetés dans une économie donne une
                        opportunité de les produire ou de se préparer à les produire. Voir Waddle (2017).</p>

                    <h5>Avec qui produire ?</h5>
                    <p>Sur l’enjeu de <strong>qui</strong>, des potentiels collaborateurs et associés, il est
                        généralement conseillé de discuter, de peaufiner ses idées avec ses plus proches à compétences
                        complémentaires.</p>
                    <p>Les proches ne sont pas nécessairement des membres de sa famille. Ils peuvent être aussi et
                        devraient être des camarades de classe, des collègues de travail reconnus pour leur compétence
                        et leur honnêteté. Ces deux valeurs à chercher chez tous les associés sont la clé de la réussite
                        de la nouvelle entreprise et de sa consolidation.</p>
                    <p>Vous pouvez élargir ce petit cercle fermé à d’autres professionnels compétents qui se retrouvent
                        dans la vision de la nouvelle entreprise.</p>
                    <p>La plateforme JobPaw dispose d’une solide base de données de professionnels intéressés par
                        l’entreprenariat. Elle peut ainsi créer le lien entre eux et faciliter leur rencontre.</p>

                    <h5>Comment produire ?</h5>
                    <p>Le dernier enjeu <strong>comment</strong>, sur comment combiner les ressources pour produire, est
                        le plus important. Il s’agit de passer de la parole (rêve, idées, projet) aux actions (mise en
                        œuvre).</p>
                    <p>Ceci nécessite un savoir-faire technique acquis à travers l’étude, l’observation et l’expérience.
                    </p>
                    <p>Le premier pas consiste à avoir le projet avec un plan d’affaires et une étude de marché. Il est
                        préférable de recourir à des entreprises spécialisées de la place, tout en faisant attention au
                        vol de vos idées.</p>
                    <p>Le deuxième pas est la mise en œuvre qui requiert la mise en place de :</p>
                    <ul>
                        <li>Sommet stratégique où l’on s’accorde sur la vision et l’orientation.</li>
                        <li>Technostructure où l’on transforme la vision en action avec capacité de suivi et
                            d’évaluation.</li>
                        <li>Centre opérationnel où les actions de production sont entreprises.</li>
                    </ul>
                    <p>Ceci exige un savoir-faire éprouvé pour s’assurer que les ressources humaines et financières
                        soient utilisées de façon optimale.</p>
                    <p>Parlant de ressources techniques et financières, il est possible d’obtenir du financement externe
                        et de l’encadrement technique.</p>
                    <p>De nombreuses plateformes web de crowdfunding avec paiement de frais : Indiegogo (4%), Rock et
                        Hub (4%), GoFundMe (5%), Razoo (3%), Crowdrise (5%), etc. permettent d’obtenir du financement,
                        sous forme de dons, pour des projets entrepreneurs innovants et créatifs, culturels ou
                        solidaires. <a href="#">Cliquer sur Crowd Funding</a></p>
                    <p>Des institutions locales publiques et privées détaillées dans les tableaux ci-dessous fournissent
                        aussi un encadrement technique et un encadrement financier.</p>

                    <p><a href="#">Cliquez ici</a> et avisez-nous si vous êtes une entreprise ou un professionnel
                        certifié et si vous voulez être notre partenaire dans un domaine.</p>
                    <p>Vous pourrez commenter et partager toute information utile sur ce sujet dans la section
                        commentaires.</p>

                </div>
            </div>
        </section>
    </div>
    <footer class="main-footer background-black">
        <div class="main-footer__bg" style="background-image: url(../assets/images/backgrounds/footer-bg.jpg);"></div>
        <!-- /.main-footer__bg -->
        <div class="main-footer__subscribe">
            <div class="container">
                <div class="main-footer__subscribe__wrapper">
                    <div class="main-footer__subscribe__left">
                        <span class="main-footer__subscribe__icon"><i class="icon-message"></i></span>
                        <h3 class="main-footer__subscribe__title">Subscribe Now to Get <br>
                            Latest Updates</h3>
                    </div>
                    <div class="main-footer__subscribe__right">
                        <form action="#" data-url="MAILCHIMP_FORM_URL" class="main-footer__newsletter mc-form">
                            <input type="text" name="EMAIL" placeholder="Email address">
                            <button type="submit" class="fas fa-paper-plane">
                                <span class="sr-only">submit</span><!-- /.sr-only -->
                            </button>
                        </form><!-- /.footer-widget__newsletter mc-form -->
                        <div class="mc-form__response"></div><!-- /.mc-form__response -->
                    </div>
                </div>
            </div>
        </div>
        <div class="main-footer__top">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-xl-5">
                        <div class="footer-widget footer-widget--about">
                            <a href="index.html" class="footer-widget__logo">
                                <img src="../assets/images/logo-light.png" width="125" alt="Hiredots HTML Template">
                            </a>
                            <p class="footer-widget__text">Lorem ipsum dolor sit amet, consect etur adi pisicing elit
                                <br>
                                sed do eiusmod tempor incididunt ut labore.
                            </p>
                            <div class="footer-widget__author">
                                <div class="footer-widget__author__img">
                                    <img src="../assets/images/resources/footer-about-avata.png" alt="">
                                </div>
                                <div>
                                    <div class="footer-widget__author__info">
                                        <span class="footer-widget__author__tagline">Need Help?</span>
                                        <h3 class="footer-widget__author__title"><a href="contact.html">Book Appointment
                                            </a></h3>
                                    </div>
                                </div>
                            </div>
                        </div><!-- /.footer-widget -->
                    </div><!-- /.col-md-6 -->
                    <div class="col-md-6 col-xl-2">
                        <div class="footer-widget footer-widget--links">
                            <h2 class="footer-widget__title">Explore</h2><!-- /.footer-widget__title -->
                            <ul class="list-unstyled footer-widget__links">
                                <li><a href="about.html">About Company</a></li>
                                <li><a href="team.html">Meet the Team</a></li>
                                <li><a href="blog.html">News & Media</a></li>
                                <li><a href="project.html">Our Projects</a></li>
                                <li><a href="contact.html">Contact</a></li>
                            </ul><!-- /.list-unstyled footer-widget__links -->
                        </div><!-- /.footer-widget -->
                    </div><!-- /.col-md-6 -->
                    <div class="col-md-6 col-xl-2">
                        <div class="footer-widget footer-widget--contact">
                            <h2 class="footer-widget__title">Links</h2><!-- /.footer-widget__title -->
                            <ul class="list-unstyled footer-widget__links">
                                <li><a href="about.html">Apply Now</a></li>
                                <li><a href="contact.html">Contract to Hire</a></li>
                                <li><a href="team.html">Direct Hire</a></li>
                                <li><a href="history.html">Executive Search</a></li>
                                <li><a href="about.html">Our Solutions</a></li>
                            </ul><!-- /.list-unstyled footer-widget__links -->
                        </div><!-- /.footer-widget -->
                    </div><!-- /.col-md-6 -->
                    <div class="col-md-6 col-xl-3">
                        <div class="footer-widget footer-widget--time">
                            <h2 class="footer-widget__title">Contact</h2><!-- /.footer-widget__title -->
                            <p class="footer-widget__text">66 Road Broklyn Street, 600 <br> New York, USA</p>
                            <!-- /.footer-widget__text -->
                            <ul class="list-unstyled footer-widget__info">
                                <li><i class="fas fa-envelope"></i> <a
                                        href="mailto:needhelp@company.com">needhelp@company.com</a></li>
                                <li><i class="fas fa-phone-square"></i> <a href="tel:+92(8800)-6930">+ 92 ( 8800 ) -
                                        6930</a></li>
                            </ul><!-- /.list-unstyled -->
                        </div><!-- /.footer-widget -->
                    </div><!-- /.col-md-6 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div><!-- /.main-footer__top -->
        <div class="main-footer__bottom">
            <div class="container">
                <div class="main-footer__bottom__inner">
                    <div class="footer-widget__social">
                        <a href="https://twitter.com">
                            <i class="fab fa-twitter" aria-hidden="true"></i>
                            <span class="sr-only">Twitter</span>
                        </a>
                        <a href="https://facebook.com">
                            <i class="fab fa-facebook" aria-hidden="true"></i>
                            <span class="sr-only">Facebook</span>
                        </a>
                        <a href="https://pinterest.com">
                            <i class="fab fa-pinterest-p" aria-hidden="true"></i>
                            <span class="sr-only">Pinterest</span>
                        </a>
                        <a href="https://instagram.com">
                            <i class="fab fa-instagram" aria-hidden="true"></i>
                            <span class="sr-only">Instagram</span>
                        </a>
                    </div><!-- /.footer-widget__social -->
                    <p class="main-footer__copyright">
                        &copy; Copyright <span class="dynamic-year"></span> by Hiredots HTML Template.
                    </p>
                </div><!-- /.main-footer__inner -->
            </div><!-- /.container -->
        </div><!-- /.main-footer__bottom -->
    </footer><!-- /.main-footer -->

    </div>
    <!-- /.page-wrapper -->



    <div class="mobile-nav__wrapper">
        <div class="mobile-nav__overlay mobile-nav__toggler"></div>
        <!-- /.mobile-nav__overlay -->
        <div class="mobile-nav__content">
            <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>
            <div class="logo-box">
                <a href="index.html" aria-label="logo image"><img src="../assets/images/logos/logo-for-dark.png"
                        width="155" alt=""></a>
            </div>
            <!-- /.logo-box -->
            <div class="mobile-nav__container"></div>
            <!-- /.mobile-nav__container -->
            <ul class="mobile-nav__contact list-unstyled">
                <li>
                    <i class="fa fa-envelope"></i>
                    <a href="mailto:needhelp@hiredots.com">needhelp@hiredots.com</a>
                </li>
                <li>
                    <i class="fa fa-phone-alt"></i>
                    <a href="tel:666-888-0000">666 888 0000</a>
                </li>
            </ul><!-- /.mobile-nav__contact -->
            <div class="mobile-nav__social">
                <a href="https://twitter.com">
                    <i class="fab fa-twitter" aria-hidden="true"></i>
                    <span class="sr-only">Twitter</span>
                </a>
                <a href="https://facebook.com">
                    <i class="fab fa-facebook" aria-hidden="true"></i>
                    <span class="sr-only">Facebook</span>
                </a>
                <a href="https://pinterest.com">
                    <i class="fab fa-pinterest-p" aria-hidden="true"></i>
                    <span class="sr-only">Pinterest</span>
                </a>
                <a href="https://instagram.com">
                    <i class="fab fa-instagram" aria-hidden="true"></i>
                    <span class="sr-only">Instagram</span>
                </a>
            </div><!-- /.mobile-nav__social -->
        </div>
        <!-- /.mobile-nav__content -->
    </div>
    <!-- /.mobile-nav__wrapper -->
    <div class="search-popup">
        <div class="search-popup__overlay search-toggler"></div>
        <!-- /.search-popup__overlay -->
        <div class="search-popup__content">
            <form role="search" method="get" class="search-popup__form" action="#">
                <input type="text" id="search" placeholder="Search Here...">
                <button type="submit" aria-label="search submit" class="hiredots-btn hiredots-btn--base">
                    <span><i class="icon-magnifying-glass"></i></span>
                </button>
            </form>
        </div>
        <!-- /.search-popup__content -->
    </div>
    <!-- /.search-popup -->

    <!-- <a href="#" data-target="html" class="scroll-to-target scroll-to-top">
        <span class="scroll-to-top__text">back top</span>
        <span class="scroll-to-top__wrapper"><span class="scroll-to-top__inner"></span></span>
    </a> -->


    <script src="../assets/vendors/jquery/jquery-3.7.0.min.js"></script>
    <script src="../assets/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/vendors/bootstrap-select/bootstrap-select.min.js"></script>
    <script src="../assets/vendors/jarallax/jarallax.min.js"></script>
    <script src="../assets/vendors/jquery-ui/jquery-ui.js"></script>
    <script src="../assets/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js"></script>
    <script src="../assets/vendors/jquery-appear/jquery.appear.min.js"></script>
    <script src="../assets/vendors/jquery-circle-progress/jquery.circle-progress.min.js"></script>
    <script src="../assets/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="../assets/vendors/jquery-validate/jquery.validate.min.js"></script>
    <script src="../assets/vendors/nouislider/nouislider.min.js"></script>
    <script src="../assets/vendors/slick/slick.min.js"></script>
    <script src="../assets/vendors/wnumb/wNumb.min.js"></script>
    <script src="../assets/vendors/owl-carousel/js/owl.carousel.min.js"></script>
    <script src="../assets/vendors/wow/wow.js"></script>
    <script src="../assets/vendors/imagesloaded/imagesloaded.min.js"></script>
    <script src="../assets/vendors/isotope/isotope.js"></script>
    <script src="../assets/vendors/countdown/countdown.min.js"></script>
    <script src="../assets/vendors/jquery-circleType/jquery.circleType.js"></script>
    <script src="../assets/vendors/jquery-lettering/jquery.lettering.min.js"></script>
    <script src="../scripts/professionals.js"></script>
    <!-- template js -->
    <script src="../assets/js/hiredots.js"></script>
</body>

</html>