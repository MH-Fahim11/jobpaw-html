<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jobs || JobPaw</title>
    <!-- favicons Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicons/favicon-16x16.png">
    <link rel="manifest" href="assets/images/favicons/site.webmanifest">
    <meta name="description" content="Hiredots is a modern HTML Template HR services, Recruiting Agency, Recruiting Business, Hire Employees, Recruiting Consulting, Job Posting, Interviewing Services websites and businesses.">

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <!-- reey font -->
    <link rel="stylesheet" href="assets/vendors/reey-font/stylesheet.css">


    <link rel="stylesheet" href="assets/vendors/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/vendors/bootstrap-select/bootstrap-select.min.css">
    <link rel="stylesheet" href="assets/vendors/animate/animate.min.css">
    <link rel="stylesheet" href="assets/vendors/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="assets/vendors/jquery-ui/jquery-ui.css">
    <link rel="stylesheet" href="assets/vendors/jarallax/jarallax.css">
    <link rel="stylesheet" href="assets/vendors/jquery-magnific-popup/jquery.magnific-popup.css">
    <link rel="stylesheet" href="assets/vendors/nouislider/nouislider.min.css">
    <link rel="stylesheet" href="assets/vendors/nouislider/nouislider.pips.css">
    <link rel="stylesheet" href="assets/vendors/slick/slick.css">
    <link rel="stylesheet" href="assets/vendors/hiredots-icons/style.css">
    <link rel="stylesheet" href="assets/vendors/owl-carousel/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/vendors/owl-carousel/css/owl.theme.default.min.css">

    <!-- template styles -->
    <link rel="stylesheet" href="assets/css/hiredots.css">
</head>

<body class="custom-cursor">

    <div class="custom-cursor__cursor"></div>
    <div class="custom-cursor__cursor-two"></div>

    <div class="preloader">
        <div class="preloader__image" style="background-image: url(assets/images/loader.png);"></div>
    </div>
    <!-- /.preloader -->

        <?php
            $logo = "../assets/images/logos/logo-light.png";
            include_once('component/navBar.php') ; 
        ?> 

        <section class="page-header">
            <div class="page-header__bg"></div>
            <div class="page-header__shape"><img src="assets/images/shapes/page-header-shape.png" alt="hiredots"></div>
            <!-- /.page-header__bg -->
            <div class="container">
                <h2 class="page-header__title">Jobs</h2>
                <ul class="hiredots-breadcrumb list-unstyled">
                    <li><a href="index.html">Home</a></li>
                    <li><span>Jobs</span></li>
                </ul><!-- /.thm-breadcrumb list-unstyled -->
            </div><!-- /.container -->
        </section><!-- /.page-header -->

        <div class="jobs">
            <div class="container">
                <form class="contact-form-validated" action="inc/sendemail.php" novalidate="novalidate">
                    <div class="jobs__form wow fadeInUp animated" data-wow-duration="1500ms">
                        <div class="jobs__group row gutter-y-20">
                            <div class="col-md-6">
                                <div class="job__control Jobs__control--full">
                                    <input type="text" name="name" placeholder="All Jobs">
                                </div><!-- /.Jobs__control Jobs__control--full -->
                            </div>
                            <div class="col-md-6">
                                <div class="jobs__control Jobs__control--full">
                                    <input type="text" name="name" placeholder="Any Location">
                                </div><!-- /.Jobs__control Jobs__control--full -->
                            </div>
                        </div><!-- /.Jobs__group -->
                    </div>
                    <div class="jobs__form__checkbox">
                        <div class="item">
                            <input type="checkbox" id="freelance">
                            <label for="freelance" class="check"></label>
                            <label for="freelance"> Freelance </label>
                        </div>
                        <div class="item">
                            <input type="checkbox" id="full">
                            <label for="full" class="check"></label>
                            <label for="full"> Full Time </label>
                        </div>
                        <div class="item">
                            <input type="checkbox" id="part">
                            <label for="part" class="check"></label>
                            <label for="part"> Part Time </label>
                        </div>
                        <div class="item">
                            <input type="checkbox" id="temporary">
                            <label for="temporary" class="check"></label>
                            <label for="temporary"> Temporary </label>
                        </div>
                    </div>
                </form>
                <div class="jobs-list">
                    <!-- job card  -->
                    <div class="jobs-list__card">
                        <div class="jobs-list__left">
                            <div class="jobs-list__logo">
                                <img src="assets/images/jobs/logo-1.png" alt="">
                            </div>
                            <div class="jobs-list__content">
                                <span class="jobs-list__time"><i class="fas fa-clock"></i> Posted 3 days ago </span>
                                <h3 class="jobs-list__title"><a href="contact.html">Software Engineer Job</a></h3>
                                <span class="jobs-list__location">San Fransisco, California</span>
                            </div>
                        </div>
                        <div class="jobs-list__right">
                            <span class="jobs-list__price"><b>$85,000 - $90,000</b> Per Year</span>
                            <a href="contact.html" class="hiredots-btn">Apply Now</a>
                        </div>
                    </div>
                    <!-- job card  -->
                    <div class="jobs-list__card">
                        <div class="jobs-list__left">
                            <div class="jobs-list__logo">
                                <img src="assets/images/jobs/logo-2.png" alt="">
                            </div>
                            <div class="jobs-list__content">
                                <span class="jobs-list__time"><i class="fas fa-clock"></i> Posted 3 days ago </span>
                                <h3 class="jobs-list__title"><a href="contact.html">Administrative Coordinator</a></h3>
                                <span class="jobs-list__location">San Fransisco, California</span>
                            </div>
                        </div>
                        <div class="jobs-list__right">
                            <span class="jobs-list__price"><b>$85,000 - $90,000</b> Per Year</span>
                            <a href="contact.html" class="hiredots-btn">Apply Now</a>
                        </div>
                    </div>
                    <!-- job card  -->
                    <div class="jobs-list__card">
                        <div class="jobs-list__left">
                            <div class="jobs-list__logo">
                                <img src="assets/images/jobs/logo-3.png" alt="">
                            </div>
                            <div class="jobs-list__content">
                                <span class="jobs-list__time"><i class="fas fa-clock"></i> Posted 3 days ago </span>
                                <h3 class="jobs-list__title"><a href="contact.html">Human Resources Manager</a></h3>
                                <span class="jobs-list__location">San Fransisco, California</span>
                            </div>
                        </div>
                        <div class="jobs-list__right">
                            <span class="jobs-list__price"><b>$85,000 - $90,000</b> Per Year</span>
                            <a href="contact.html" class="hiredots-btn">Apply Now</a>
                        </div>
                    </div>
                    <!-- job card  -->
                    <div class="jobs-list__card">
                        <div class="jobs-list__left">
                            <div class="jobs-list__logo">
                                <img src="assets/images/jobs/logo-4.png" alt="">
                            </div>
                            <div class="jobs-list__content">
                                <span class="jobs-list__time"><i class="fas fa-clock"></i> Posted 3 days ago </span>
                                <h3 class="jobs-list__title"><a href="contact.html">Graphic & Web Designing</a></h3>
                                <span class="jobs-list__location">San Fransisco, California</span>
                            </div>
                        </div>
                        <div class="jobs-list__right">
                            <span class="jobs-list__price"><b>$85,000 - $90,000</b> Per Year</span>
                            <a href="contact.html" class="hiredots-btn">Apply Now</a>
                        </div>
                    </div>
                    <!-- job card  -->
                    <div class="jobs-list__card">
                        <div class="jobs-list__left">
                            <div class="jobs-list__logo">
                                <img src="assets/images/jobs/logo-5.png" alt="">
                            </div>
                            <div class="jobs-list__content">
                                <span class="jobs-list__time"><i class="fas fa-clock"></i> Posted 3 days ago </span>
                                <h3 class="jobs-list__title"><a href="contact.html">Digital Marketing Assistant</a></h3>
                                <span class="jobs-list__location">San Fransisco, California</span>
                            </div>
                        </div>
                        <div class="jobs-list__right">
                            <span class="jobs-list__price"><b>$85,000 - $90,000</b> Per Year</span>
                            <a href="contact.html" class="hiredots-btn">Apply Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Jobs End -->
        <?php
            $logo ="assets/images/logos/logo-dark.png";
            include_once('./component/footer.php') ; 
        ?> <!-- /.main-footer -->

    </div><!-- /.page-wrapper -->



    <?php
            $logo ="assets/images/logos/logo-dark.png";
            include_once('./component/mobileNav.php') ; 
        ?>
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


    <script src="assets/vendors/jquery/jquery-3.7.0.min.js"></script>
    <script src="assets/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendors/bootstrap-select/bootstrap-select.min.js"></script>
    <script src="assets/vendors/jarallax/jarallax.min.js"></script>
    <script src="assets/vendors/jquery-ui/jquery-ui.js"></script>
    <script src="assets/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js"></script>
    <script src="assets/vendors/jquery-appear/jquery.appear.min.js"></script>
    <script src="assets/vendors/jquery-circle-progress/jquery.circle-progress.min.js"></script>
    <script src="assets/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="assets/vendors/jquery-validate/jquery.validate.min.js"></script>
    <script src="assets/vendors/nouislider/nouislider.min.js"></script>
    <script src="assets/vendors/slick/slick.min.js"></script>
    <script src="assets/vendors/wnumb/wNumb.min.js"></script>
    <script src="assets/vendors/owl-carousel/js/owl.carousel.min.js"></script>
    <script src="assets/vendors/wow/wow.js"></script>
    <script src="assets/vendors/imagesloaded/imagesloaded.min.js"></script>
    <script src="assets/vendors/isotope/isotope.js"></script>
    <script src="assets/vendors/countdown/countdown.min.js"></script>
    <script src="assets/vendors/jquery-circleType/jquery.circleType.js"></script>
    <script src="assets/vendors/jquery-lettering/jquery.lettering.min.js"></script>
    <!-- template js -->
    <script src="assets/js/hiredots.js"></script>
</body>

</html>