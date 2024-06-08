<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jobpaw | Universities</title>
    <!-- favicons Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="../assets/images/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../assets/images/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicons/favicon-16x16.png">
    <link rel="manifest" href="../assets/images/favicons/site.webmanifest">
    <meta name="description" content="Hiredots is a modern HTML Template HR services, Recruiting Agency, Recruiting Business, Hire Employees, Recruiting Consulting, Job Posting, Interviewing Services websites and businesses.">

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
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
        <div class="preloader__image" style="background-image: url(assets/images/loader.png);"></div>
    </div>
        <header class="main-header sticky-header sticky-header--normal">
        <?php
            $logo = "../assets/images/logos/logo-light.png";
            include_once('../component/navBar.php') ; 
        ?>
        </header>
        <!-- main-slider-start -->
        <div>
            <section class="page-header">
                <div class="page-header__bg"></div>
                <div class="page-header__shape">
                    <img src="../images/shapes/page-header-shape.png" alt="hiredots">
                </div>
                <div class="container">
                    <h2 class="page-header__title">Find Job</h2>
                    <ul class="hiredots-breadcrumb list-unstyled">
                        <li>
                            <a href="/">Home</a>
                        </li>
                        <li>
                            <span>Professionals / Find Job</span>
                        </li>
                    </ul>
                </div>
            </section>
        </div>
        <!-- main-slider-end -->
        <!-- Feature Start -->
       <div class="my-5">
        <div class="container">
            <form  class="contact-form-validated" action="inc/sendemail.php" noValidate="novalidate">
                <div class="jobs__form wow fadeInUp animated" data-wow-duration="1500ms">
                    <div class="jobs__group row gutter-y-20">
                        <div class="col-md-6">
                            <div class="job__control Jobs__control--full">
                                <input type="text" name="name" placeholder="All Jobs">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div>
                                <select class="jobs__control Jobs__control--full" name="" id="">
                                    <option value="">x</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="jobs__form__checkbox">
                    <!-- Checkbox items can be added here -->
                </div>
            </form>
            <div id="jobs" class="jobs">
                <!-- Content will be dynamically added here -->
            </div>
        </div>
       </div>
       <?php
            $logo ="../assets/images/logos/logo-dark.png";
            include_once('./../component/footer.php') ; 
        ?><!-- /.main-footer -->

    </div>
    <!-- /.page-wrapper -->



    <?php
            $logo ="../assets/images/logos/logo-dark.png";
            include_once('./../component/mobileNav.php') ; 
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
    <script src="../assets/js/findjob.js"></script>
    <!-- template js -->
    <script src="../assets/js/hiredots.js"></script>
</body>

</html>