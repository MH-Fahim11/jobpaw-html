<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jobpaw</title>
    <!-- favicons Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicons/favicon-16x16.png">
    <link rel="manifest" href="assets/images/favicons/site.webmanifest">
    <meta name="description" content="JobPaw is a modern HTML Template HR services, Recruiting Agency, Recruiting Business, Hire Employees, Recruiting Consulting, Job Posting, Interviewing Services websites and businesses.">

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
    
        <header  class="main-header sticky-header sticky-header--normal">
        <?php
            $logo = "assets/images/logos/logo-light.png";
            include_once('component/navBar.php') ; 
        ?>    
        </header>

        <?php
            include_once('component/home/slider.php') ; 
        ?>

        <?php
            include_once('component/home/services.php') ; 
        ?> 


        <?php
            include_once('component/home/whychose.php') ; 
        ?>  
        <?php
            include_once('component/home/trustedby.php') ; 
        ?>  
        
        

        <!-- /.funfact-one -->
        <section class="service-one" style="background-color: #0dc786;">
            <div class="container">
                <div class="sec-title text-center">

                    <h6 class="sec-title__tagline">Our Jobs</h6><!-- /.sec-title__tagline -->

                    <h3 class="sec-title__title">Find Your Next Job
                        <br/> Be gladden</h3><!-- /.sec-title__title -->
                </div><!-- /.sec-title -->
                <div class="row gutter-y-30">
                    <div class="col-md-6 col-lg-4">
                        <div class="service-one-card service-card-two" data-wow-duration="1500ms" data-wow-delay="${index}ms">
                            <div class="service-one-card__image">
                                <img src="./assets/images/home/1.jpg" alt="${job.title}">
                            </div>
                            <div class="service-one-card__content">
                                <div style="display: flex; justify-content: space-between" class="service-one-card__icon">
                                    <img style="width: 50px; height: 50px" src="./images/jobs/image-1.png" alt="${job.company}">
                                    <a href="/services" class="service-one-card__cat">Programming & Tech</a>
                                </div>
                                <h3 style="height: 50px" class="service-one-card__title">
                                    <a href="${job.link}">Software Engineer Job</a>
                                </h3>
                                <p class="service-one-card__text">Company: Brain Station 23</p>
                                <p class="service-one-card__text">Deadline: 5/31/2024</p>
                            </div>
                            <a href="/professionnels/find-job/${createSlug(job.title)}" class="service-one-card__link">
                                Read More
                                <i class="icon-right-arrow"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="service-one-card service-card-two" data-wow-duration="1500ms" data-wow-delay="${index}ms">
                            <div class="service-one-card__image">
                                <img src="./assets/images/home/2.jpg" alt="${job.title}">
                            </div>
                            <div class="service-one-card__content">
                                <div style="display: flex; justify-content: space-between" class="service-one-card__icon">
                                    <img style="width: 50px; height: 50px" src="./images/jobs/image-1.png" alt="${job.company}">
                                    <a href="/services" class="service-one-card__cat">Sales & Marketing</a>
                                </div>
                                <h3 style="height: 50px" class="service-one-card__title">
                                    <a href="${job.link}">Digital Marketing</a>
                                </h3>
                                <p class="service-one-card__text">Company: Enosis Solution</p>
                                <p class="service-one-card__text">Deadline: 7/06/2024</p>
                            </div>
                            <a href="/professionnels/find-job/${createSlug(job.title)}" class="service-one-card__link">
                                Read More
                                <i class="icon-right-arrow"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="service-one-card service-card-two" data-wow-duration="1500ms" data-wow-delay="${index}ms">
                            <div class="service-one-card__image">
                                <img src="./assets/images/home/3.jpg" alt="${job.title}">
                            </div>
                            <div class="service-one-card__content">
                                <div style="display: flex; justify-content: space-between" class="service-one-card__icon">
                                    <img style="width: 50px; height: 50px" src="./images/jobs/image-1.png" alt="${job.company}">
                                    <a href="/services" class="service-one-card__cat">Multimedia</a>
                                </div>
                                <h3 style="height: 50px" class="service-one-card__title">
                                    <a href="${job.link}">Video Editing</a>
                                </h3>
                                <p class="service-one-card__text">Company: Dropouts Discord</p>
                                <p class="service-one-card__text">Deadline: 5/31/2024</p>
                            </div>
                            <a href="/professionals/find-job.html" class="service-one-card__link">
                                Read More
                                <i class="icon-right-arrow"></i>
                            </a>
                        </div>
                    </div>
                </div><!-- /.row -->
                <div style="display: flex; justify-content: center; margin-top: 20px;">
                    <a href="/professionals/find-job.html" class="hiredots-btn">View more jobs</a>
                </div>
            </div><!-- /.container -->
        </section><!-- /.service-one --><!-- /.service-one -->
        <!-- Call To Action Start -->
        <section class="service-one" style="background-image: url(assets/images/shapes/service-bg-1.jpg);">
            <div class="container">
                <div class="sec-title text-center">

                    <h6 class="sec-title__tagline">OUR TENDERS</h6><!-- /.sec-title__tagline -->

                    <h3 class="sec-title__title">Recent Tenders</h3><!-- /.sec-title__title -->
                </div><!-- /.sec-title -->
                <div class="row gutter-y-30">
                    <div class="col-md-6 col-lg-4">
                        <div class="service-one-card service-card-two" data-wow-duration="1500ms" data-wow-delay="${index}ms">
                            <div class="service-one-card__image">
                                <img src="./assets/images/home/4.jpg" alt="${job.title}">
                            </div>
                            <div class="service-one-card__content">
                                <h3  class="service-one-card__title">
                                    <a href="${job.link}">Website Redesign Project</a>
                                </h3>
                                <p>
                                    Inviting proposals for the redesign of our company...
                                </p>
                                <p class="service-one-card__text">Company: Brain Station 23</p>
                            </div>
                            <a href="/professionnels/find-job/${createSlug(job.title)}" class="service-one-card__link">
                                Read More
                                <i class="icon-right-arrow"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="service-one-card service-card-two" data-wow-duration="1500ms" data-wow-delay="${index}ms">
                            <div class="service-one-card__image">
                                <img src="./assets/images/home/5.jpg" alt="${job.title}">
                            </div>
                            <div class="service-one-card__content">
                                <h3  class="service-one-card__title">
                                    <a href="${job.link}">Freelance Video Editor</a>
                                </h3>
                                <p>
                                    Inviting proposals for the redesign of our company...
                                </p>
                                <p class="service-one-card__text">Company: Enosis Solution</p>
                            </div>
                            <a href="/professionnels/find-job/${createSlug(job.title)}" class="service-one-card__link">
                                Read More
                                <i class="icon-right-arrow"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="service-one-card service-card-two" data-wow-duration="1500ms" data-wow-delay="${index}ms">
                            <div class="service-one-card__image">
                                <img src="./assets/images/home/6.jpg" alt="${job.title}">
                            </div>
                            <div class="service-one-card__content">
                                <h3 class="service-one-card__title">
                                    <a href="${job.link}">Software Development </a>
                                </h3>
                                <p>
                                    Inviting proposals for the redesign of our company...
                                </p>
                                <p class="service-one-card__text">Company: Dropouts Discord</p>
                            </div>
                            <a href="/professionals/find-job.html" class="service-one-card__link">
                                Read More
                                <i class="icon-right-arrow"></i>
                            </a>
                        </div>
                    </div>
                </div><!-- /.row -->
                <div style="display: flex; justify-content: center; margin-top: 20px;">
                    <a href="/professionals/find-job.html" class="hiredots-btn">View more jobs</a>
                </div>
            </div><!-- /.container -->
        </section>

        <section class="service-one"  style="background-color:#f1f9fe;" >
            <div class="container">
                <div class="sec-title text-center">

                    <h6 class="sec-title__tagline">SEMINERS</h6><!-- /.sec-title__tagline -->

                    <h3 class="sec-title__title">Join free seminers</h3><!-- /.sec-title__title -->
                </div><!-- /.sec-title -->
                <div class="row gutter-y-30">
                    <div class="col-md-6 col-lg-4">
                        <div class="service-one-card service-card-two" data-wow-duration="1500ms" data-wow-delay="${index}ms">
                            <div class="service-one-card__image">
                                <img src="./assets/images/home/7.jpg" alt="${job.title}">
                            </div>
                            <div class="service-one-card__content">
                                <h3  class="service-one-card__title">
                                    <a href="">Introduction to Data Science Workshop</a>
                                </h3>
                                <p>
                                    TechMaster Bootcamp is an intensive training program designed to equip...
                                </p>
                                <p class="service-one-card__text">
                                    Date: May 10, 2024
                                    <br/>
Time: 10:00 AM - 4:00 PM
                                </p>
                            </div>
                            <a href="/professionnels/find-job/${createSlug(job.title)}" class="service-one-card__link">
                                Read More
                                <i class="icon-right-arrow"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="service-one-card service-card-two" data-wow-duration="1500ms" data-wow-delay="${index}ms">
                            <div class="service-one-card__image">
                                <img src="./assets/images/home/8.jpg" alt="${job.title}">
                            </div>
                            <div class="service-one-card__content">
                                <h3  class="service-one-card__title">
                                    <a href="${job.link}">Learn about Digital marketing</a>
                                </h3>
                                <p>
                                    TechMaster Bootcamp is an intensive training program designed to equip...
                                </p>
                                <p class="service-one-card__text">
                                    Date: May 10, 2024
                                    <br/>
Time: 10:00 AM - 4:00 PM
                                </p>
                            </div>
                            <a href="/professionnels/find-job/${createSlug(job.title)}" class="service-one-card__link">
                                Read More
                                <i class="icon-right-arrow"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="service-one-card service-card-two" data-wow-duration="1500ms" data-wow-delay="${index}ms">
                            <div class="service-one-card__image">
                                <img src="./assets/images/home/9.jpg" alt="${job.title}">
                            </div>
                            <div class="service-one-card__content">
                                <h3  class="service-one-card__title">
                                    <a href="${job.link}">Web Development Bootcamp</a>
                                </h3>
                                <p>
                                    TechMaster Bootcamp is an intensive training program designed to equip...
                                </p>
                                <p class="service-one-card__text">
                                    Date: May 10, 2024
                                    <br/>
Time: 10:00 AM - 4:00 PM
                                </p>
                            </div>
                            <a href="/professionnels/find-job/${createSlug(job.title)}" class="service-one-card__link">
                                Read More
                                <i class="icon-right-arrow"></i>
                            </a>
                        </div>
                    </div>
                </div><!-- /.row -->
                <div style="display: flex; justify-content: center; margin-top: 20px;">
                    <a href="/professionals/find-job.html" class="hiredots-btn">View more jobs</a>
                </div>
            </div><!-- /.container -->
        </section>
       

        <!-- Call To Action Start -->

        <section class="blog-one" style="background-color: #000052;">
            <div class="container">
                <div class="sec-title text-center">

                    <h6 class="sec-title__tagline" style="color:#fff">News Updates</h6><!-- /.sec-title__tagline -->

                    <h3 class="sec-title__title" style="color:#fff">Latest Articles & <br>News from the Blogs</h3><!-- /.sec-title__title -->
                </div><!-- /.sec-title -->
                <div class="blog-one__carousel hiredots-owl__carousel hiredots-owl__carousel--with-shadow hiredots-owl__carousel--basic-nav owl-carousel owl-theme d-flex flex-column" data-owl-options='{
                        "items": 1,
                        "margin": 0,
                        "loop": false,
                        "smartSpeed": 700,
                        "nav": true,
                        "navText": ["<span class=\"icon-left-arrow\"></span>","<span class=\"icon-right-arrow\"></span>"],
                        "dots": false,
                        "autoplay": false,
                        "responsive": {
                            "0": {
                                "items": 1
                            },
                            "576": {
                                "items": 2,
                                "margin": 30
                            },
                            "992": {
                                "items": 3,
                                "margin": 30
                            }
                        }
                        }'>
                    <div class="item">
                        <div class="blog-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='000ms'>
                            <div class="blog-card__image">
                                <img src="./images/blog/blog-1.png" alt="Guide to HR Adviser and Clients Lessening">
                            </div><!-- /.blog-card__image -->
                            <div class="blog-card__content">
                                <div class="blog-card__date"><span>30</span>
                                    Aug</div><!-- /.blog-card__date -->
                               
                                <h3 class="blog-card__title mt-4"><a href="blog-details.html">Guide to HR Adviser and Clients Lessening</a></h3><!-- /.blog-card__title mt-4 -->
                                <p class="blog-card__info">Lorem ipsum is simply free dolor sit amet, consect pisicing elit.</p>
                                <p>
                                    Author: Bill gates
                                </p>
                                <a href="blog-details.html" class="blog-card__link">
                                    Read more
                                    <i class="icon-right-arrow"></i>
                                </a><!-- /.blog-card__link -->
                            </div><!-- /.blog-card__content -->
                        </div><!-- /.blog-card -->
                    </div><!-- /.item -->
                    <div class="item">
                        <div class="blog-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='100ms'>
                            <div class="blog-card__image">
                                <img src="./images/blog/blog-1.png" alt="Top Skin care tips for oily skins">
                            </div><!-- /.blog-card__image -->
                            <div class="blog-card__content">
                                <div class="blog-card__date"><span>30</span>
                                    Aug</div><!-- /.blog-card__date -->
                               
                                <h3 class="blog-card__title mt-4"><a href="blog-details.html">Top Skin care tips for oily skins</a></h3><!-- /.blog-card__title mt-4 -->
                                <p class="blog-card__info">Lorem ipsum is simply free dolor sit amet, consect pisicing elit.</p>
                                <p>
                                    Author: Mask
                                </p>
                                <a href="blog-details.html" class="blog-card__link">
                                    Read more
                                    <i class="icon-right-arrow"></i>
                                </a><!-- /.blog-card__link -->
                            </div><!-- /.blog-card__content -->
                        </div><!-- /.blog-card -->
                    </div><!-- /.item -->
                    <div class="item">
                        <div class="blog-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='200ms'>
                            <div class="blog-card__image">
                                <img src="./images/blog/blog-3.png" alt="Outstanding island for winter sun">
                            </div><!-- /.blog-card__image -->
                            <div class="blog-card__content">
                                <div class="blog-card__date"><span>30</span>
                                    Aug</div><!-- /.blog-card__date -->
                               
                                <h3 class="blog-card__title mt-4"><a href="blog-details.html">Outstanding island for winter sun</a></h3><!-- /.blog-card__title mt-4 -->
                                <p class="blog-card__info">Lorem ipsum is simply free dolor sit amet, consect pisicing elit.</p>
                                <p>
                                    Author: Sam
                                </p>
                                <a href="blog-details.html" class="blog-card__link">
                                    Read more
                                    <i class="icon-right-arrow"></i>
                                </a><!-- /.blog-card__link -->
                            </div><!-- /.blog-card__content -->
                        </div><!-- /.blog-card -->
                    </div><!-- /.item -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.blog-one -->

          
         <!-- Call To Action End -->
         <!-- Feature Start -->
        <section class="feature-one">
            <div class="container">
                <div class="sec-title text-center">
                    <h6 class="sec-title__tagline">STATISTIQUES</h6>
                    <h3 class="sec-title__title">How we can help you</h3>
                </div>
                <div class="d-md-flex" id="services-container">
                    <!-- js will fill this  -->
                </div>
            </div>
        </section>
        <!-- Feature End -->

        <?php
            $logo ="assets/images/logos/logo-dark.png";
            include_once('./component/footer.php') ; 
        ?> 

    </div>
    <!-- /.page-wrapper -->


        <?php
            $logo ="assets/images/logos/logo-dark.png";
            include_once('./component/mobileNav.php') ; 
        ?>
    
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
    <script src="./assets/js/home.js"></script>
    <script src="./assets/js/nav.js"></script>
    <script src="./component/home/services.js"></script>
    <!-- template js -->
    <script src="assets/js/hiredots.js"></script>
</body>

</html>