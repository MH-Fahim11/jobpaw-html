<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services Details || Jobpaw</title>
    <!-- favicons Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="./../assets/images/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./../assets/images/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./../assets/images/favicons/favicon-16x16.png">
    <link rel="manifest" href="./../assets/images/favicons/site.webmanifest">
    <meta name="description" content="Hiredots is a modern HTML Template HR services, Recruiting Agency, Recruiting Business, Hire Employees, Recruiting Consulting, Job Posting, Interviewing Services websites and businesses.">

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <!-- reey font -->
    <link rel="stylesheet" href="./../assets/vendors/reey-font/stylesheet.css">


    <link rel="stylesheet" href="./../assets/vendors/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="./../assets/vendors/bootstrap-select/bootstrap-select.min.css">
    <link rel="stylesheet" href="./../assets/vendors/animate/animate.min.css">
    <link rel="stylesheet" href="./../assets/vendors/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="./../assets/vendors/jquery-ui/jquery-ui.css">
    <link rel="stylesheet" href="./../assets/vendors/jarallax/jarallax.css">
    <link rel="stylesheet" href="./../assets/vendors/jquery-magnific-popup/jquery.magnific-popup.css">
    <link rel="stylesheet" href="./../assets/vendors/nouislider/nouislider.min.css">
    <link rel="stylesheet" href="./../assets/vendors/nouislider/nouislider.pips.css">
    <link rel="stylesheet" href="./../assets/vendors/slick/slick.css">
    <link rel="stylesheet" href="./../assets/vendors/hiredots-icons/style.css">
    <link rel="stylesheet" href="./../assets/vendors/owl-carousel/css/owl.carousel.min.css">
    <link rel="stylesheet" href="./../assets/vendors/owl-carousel/css/owl.theme.default.min.css">

    <!-- template styles -->
    <link rel="stylesheet" href="./../assets/css/hiredots.css">
</head>

<body class="custom-cursor">

    <div class="custom-cursor__cursor"></div>
    <div class="custom-cursor__cursor-two"></div>

    <div class="preloader">
        <div class="preloader__image" style="background-image: url(./../assets/images/loader.png);"></div>
    </div>
    <!-- /.preloader -->
    
        <header class="main-header sticky-header sticky-header--normal">
        <?php
            $logo = "../assets/images/logos/logo-light.png";
            include_once('../component/navBar.php') ; 
        ?>  
        </header>
        <section class="page-header">
            <div class="page-header__bg"></div>
            <div class="page-header__shape"><img src="./../assets/images/shapes/page-header-shape.png" alt="jobpaw"></div>
            <!-- /.page-header__bg -->
            <div class="container">
                <h2 class="page-header__title">Recrutement</h2>
                <ul class="hiredots-breadcrumb list-unstyled">
                    <li><a href="index.html">Home</a></li>
                    <li><span>Services Details</span></li>
                </ul><!-- /.thm-breadcrumb list-unstyled -->
            </div><!-- /.container -->
        </section><!-- /.page-header -->

        <section class="service-details">
            <div class="container">
                <div class="row gutter-y-30">
                    <div class="col-md-12 col-lg-4">
                        <?php
                            include_once('../component/services/sidebar.php') ; 
                        ?>
                    
                    <!-- /.sidebar -->
                    </div><!-- /.col-md-12 col-lg-4 -->
                    <div class="col-md-12 col-lg-8">
                        <div class="service-details__content">
                            <div class="service-details__thumbnail">
                                <img src="./../assets/images/resources/1.jpg" alt="HR Consulting">
                            </div><!-- /.service-details__thumbnail -->
                            <h3 class="service-details__title">Recrutement</h3><!-- /.service-details__title -->
                            <p class="service-details__text">There are many variations of passages of lorem ipsum is simply free text available
                                in the market, but the majority time you put aside to be in our office. Lorem ipsum dolor sit amet,
                                consectetLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                                dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                                ut labore et dolore magna aliqua.</p>
                            <!-- /.service-details__text -->
                            <h3 class="service-details__lighlight">Helping Clients to Solve Recruitments Problems</h3>
                            <!-- /.service-details__title -->
                            <p class="service-details__text">Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit
                                laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate
                                velit esse quam nihil molestiae consequatur.</p><!-- /.service-details__text -->

                            <h3 class="service-details__title">Why Choose?</h3><!-- /.service-details__title -->
                            <div class="list-unstyled service-details__process">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="service-details__process__top item-1">
                                            <h4 class="service-details__process__title">Short Term <br>
                                                Hiring</h4><!-- /.service-details__process__title -->
                                            <span class="service-details__process__icon"><i class="icon-individual"></i></span>
                                        </div><!-- /.service-details__process__top -->
                                    </div>
                                    <div class="col-md-4">
                                        <div class="service-details__process__top item-2">
                                            <h4 class="service-details__process__title">Last Minute <br>
                                                Hiring</h4><!-- /.service-details__process__title -->
                                            <span class="service-details__process__icon"><i class="icon-time-check"></i></span>
                                        </div><!-- /.service-details__process__top -->
                                    </div>
                                    <div class="col-md-4">
                                        <div class="service-details__process__top item-3">
                                            <h4 class="service-details__process__title">Administration <br>
                                                Rules</h4><!-- /.service-details__process__title -->
                                            <span class="service-details__process__icon"><i class="icon-report-card"></i></span>
                                        </div><!-- /.service-details__process__top -->
                                    </div>
                                </div>
                            </div><!-- /.list-unstyled service-details__process -->
                            <div class="row gutter-y-30 align-items-center">
                                <div class="col-md-6">
                                    <div class="service-details__image__circle">
                                        <img src="./../assets/images/about/20.jpg" alt="">
                                    </div><!-- /.service-details__image__circle -->
                                </div><!-- /.col-md-6 -->
                                <div class="col-md-6">
                                    <h4 class="service-details_list-title">Our Benefits</h4><!-- /.service-details__sub-title -->
                                    <p class="service-details_list-text">Get the Best Digital Marketing from the Pitoon Agency of Exellence</p>
                                    <ul class="list-unstyled service-details__list">
                                        <li><i class="fas fa-check-circle"></i> Cost Effective </li>
                                        <li><i class="fas fa-check-circle"></i> Equal Opportunities</li>
                                        <li><i class="fas fa-check-circle"></i> Creates High Brand Awareness</li>
                                        <li><i class="fas fa-check-circle"></i> Higher ROI</li>
                                    </ul><!-- /.list-unstyled service-details__post -->
                                </div><!-- /.col-md-6 -->
                            </div><!-- /.row -->
                        </div><!-- /.service-details__content -->
                    </div><!-- /.col-md-12 col-lg-8 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.service-details -->
        <?php
            $logo ="../assets/images/logos/logo-dark.png";
            include_once('./../component/footer.php') ; 
        ?>
        <!-- /.main-footer -->

    </div><!-- /.page-wrapper -->



    <?php
            $logo ="../assets/images/logos/logo-dark.png";
            include_once('./../component/mobileNav.php') ; 
        ?>
    <!-- /.mobile-nav__wrapper -->
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

    <a href="#" data-target="html" class="scroll-to-target scroll-to-top">
        <span class="scroll-to-top__text">back top</span>
        <span class="scroll-to-top__wrapper"><span class="scroll-to-top__inner"></span></span>
    </a>


    <script src="./../assets/vendors/jquery/jquery-3.7.0.min.js"></script>
    <script src="./../assets/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="./../assets/vendors/bootstrap-select/bootstrap-select.min.js"></script>
    <script src="./../assets/vendors/jarallax/jarallax.min.js"></script>
    <script src="./../assets/vendors/jquery-ui/jquery-ui.js"></script>
    <script src="./../assets/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js"></script>
    <script src="./../assets/vendors/jquery-appear/jquery.appear.min.js"></script>
    <script src="./../assets/vendors/jquery-circle-progress/jquery.circle-progress.min.js"></script>
    <script src="./../assets/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="./../assets/vendors/jquery-validate/jquery.validate.min.js"></script>
    <script src="./../assets/vendors/nouislider/nouislider.min.js"></script>
    <script src="./../assets/vendors/slick/slick.min.js"></script>
    <script src="./../assets/vendors/wnumb/wNumb.min.js"></script>
    <script src="./../assets/vendors/owl-carousel/js/owl.carousel.min.js"></script>
    <script src="./../assets/vendors/wow/wow.js"></script>
    <script src="./../assets/vendors/imagesloaded/imagesloaded.min.js"></script>
    <script src="./../assets/vendors/isotope/isotope.js"></script>
    <script src="./../assets/vendors/countdown/countdown.min.js"></script>
    <script src="./../assets/vendors/jquery-circleType/jquery.circleType.js"></script>
    <script src="./../assets/vendors/jquery-lettering/jquery.lettering.min.js"></script>
    <!-- template js -->
    <script src="./../assets/js/hiredots.js"></script>
</body>

</html>