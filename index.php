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
    
        <header  class="main-header sticky-header sticky-header--normal">
        <?php
            $title = 'Home';
            $page = 'home';
            $professionels = '/professionals'; 
            $entreprises ='/entreprises';
            $universities = '/universities';
            $services ='services.php';
            $projects = '';
            include_once('component/navBar.php') ; 
        ?>    
        </header>

        <!-- main-slider-start -->
        <section class="main-slider-one">
            <div class="main-slider-one__carousel hiredots-owl__carousel owl-carousel" data-owl-options='{
		"loop": true,
		"animateOut": "slideOutDown",
		"animateIn": "fadeIn",
		"items": 1,
		"autoplay": true,
		"autoplayTimeout": 6000,
		"smartSpeed": 1000,
		"nav": true,
        "navText": ["<span class=\"icon-left-arrow\"></span>","<span class=\"icon-right-arrow\"></span>"],
		"dots": true,
		"dotsData": true,
		"margin": 0
	    }'>
                <div class="item" data-dot="<button>1/</button>">
                    <div class="main-slider-one__item">
                        <div class="main-slider-one__bg" style="background-image: url(/images/34FinalPhotos/IMG-20240320-WA0038.jpg);"></div>
                        <div class="main-slider-one__overlay"></div>
                        <div class="main-slider-one__shape" style="background-image: url(assets/images/shapes/slider-1-shape-1.png);"></div>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="main-slider-one__content">
                                        <div class="main-slider-one__image"><img src="assets/images/shapes/slider-1-shape-2.png" alt="hiredots"></div><!-- slider-layer -->
                                        <h2 class="main-slider-one__title">
                                                Recrutez en publiant vos offres d'emploi <br/>
                                                <span class='text-danger'>Achetez en publiant vos appels d'offres</span> <br/>
                                                Signalez en publiant vos plans annuels d'achats <br/>
                                                <span className='text-danger'>Placez en adaptant vos formations aux marchés</span>
                                            </h2>
                                        <div class="main-slider-one__btn">
                                            <a href="services.html" class="hiredots-btn"><span>Discover More</span></a><!-- slider-btn -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item" data-dot="<button>2/</button>">
                    <div class="main-slider-one__item">
                        <div class="main-slider-one__bg" style="background-image: url(/images/34FinalPhotos/IMG-20240320-WA0035.jpg);"></div>
                        <div class="main-slider-one__overlay"></div>
                        <div class="main-slider-one__shape" style="background-image: url(assets/images/shapes/slider-1-shape-1.png);"></div>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="main-slider-one__content">
                                        <div class="main-slider-one__image"><img src="assets/images/shapes/slider-1-shape-2.png" alt="hiredots"></div><!-- slider-layer -->
                                        <h2 class="main-slider-one__title">Right<br> People for<br> the Business</h2><!-- slider-title -->
                                        <div class="main-slider-one__btn">
                                            <a href="services.html" class="hiredots-btn"><span>Discover More</span></a><!-- slider-btn -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item" data-dot="<button>3</button>">
                    <div class="main-slider-one__item">
                        <div class="main-slider-one__bg" style="background-image: url(/images/34FinalPhotos/IMG-20240320-WA0053.jpg);"></div>
                        <div class="main-slider-one__overlay"></div>
                        <div class="main-slider-one__shape" style="background-image: url(assets/images/shapes/slider-1-shape-1.png);"></div>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="main-slider-one__content">
                                        <div class="main-slider-one__image"><img src="assets/images/shapes/slider-1-shape-2.png" alt="hiredots"></div><!-- slider-layer -->
                                        <h2 class="main-slider-one__title">Right<br> People for<br> the Business</h2><!-- slider-title -->
                                        <div class="main-slider-one__btn">
                                            <a href="services.html" class="hiredots-btn"><span>Discover More</span></a><!-- slider-btn -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- main-slider-end -->
        <!-- Feature Start -->
        <section class="feature-one">
            <div class="container">
                <div class="sec-title text-center">
                    <h6 class="sec-title__tagline">STATISTIQUES</h6>
                    <h3 class="sec-title__title">How we can help you</h3>
                </div>
                <div class="d-md-flex" id="services-container"></div>
            </div>
        </section>
        <!-- Feature End -->
        

        <!-- /.funfact-one -->
        <section class="service-one" style="background-image: url(assets/images/shapes/service-bg-1.jpg);">
            <div class="container">
                <div class="sec-title text-center">

                    <h6 class="sec-title__tagline">Our Jobs</h6><!-- /.sec-title__tagline -->

                    <h3 class="sec-title__title">Find Your Next Job
                        <br/> Be gladden</h3><!-- /.sec-title__title -->
                </div><!-- /.sec-title -->
                <div class="row gutter-y-30">
                    <div class="col-md-6 col-lg-4">
                        <div class="feature-one__item text-center">
                            <div class="feature-one__item__img">
                                <img src="./images/34FinalPhotos/IMG-20240320-WA0018.jpg" alt="hiredots">
                            </div>
                            <div class="feature-one__item__content">
                                <div class="feature-one__item__ball"></div>
                                <div class="feature-one__item__icon"><img width="100" height="100" class=" rounded-circle" src="./images/5x/9.jpg" alt="icon"/></div>
                                <h3 class="feature-one__item__title">Software Engineer Job</h3>
                                <p class="feature-one__item__text">Company: Brain Station 23</p>
                                <p class="feature-one__item__text">Deadline: 7/06/2024</p>
                                
                                <a href="/professionnels/find-job/" class="hiredots-btn"><span>Read More</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="feature-one__item text-center">
                            <div class="feature-one__item__img">
                                <img src="./images/34FinalPhotos/IMG-20240320-WA0018.jpg" alt="hiredots">
                            </div>
                            <div class="feature-one__item__content">
                                <div class="feature-one__item__ball"></div>
                                <div class="feature-one__item__icon"><img width="100" height="100" class=" rounded-circle" src="./images/5x/9.jpg" alt="icon"/></div>
                                <h3 class="feature-one__item__title">Sales & Marketing</h3>
                                <p class="feature-one__item__text">Company: Brain Station 23</p>
                                <p class="feature-one__item__text">Deadline: 7/06/2024</p>
                                
                                <a href="/professionnels/find-job/" class="hiredots-btn"><span>Read More</span></a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6 col-lg-4">
                        <div class="feature-one__item text-center">
                            <div class="feature-one__item__img">
                                <img src="./images/34FinalPhotos/IMG-20240320-WA0018.jpg" alt="hiredots">
                            </div>
                            <div class="feature-one__item__content">
                                <div class="feature-one__item__ball"></div>
                                <div class="feature-one__item__icon"><img width="100" height="100" class=" rounded-circle" src="./images/5x/9.jpg" alt="icon"/></div>
                                <h3 class="feature-one__item__title">Video Editing</h3>
                                <p class="feature-one__item__text">Company: Brain Station 23</p>
                                <p class="feature-one__item__text">Deadline: 7/06/2024</p>
                                
                                <a href="/professionnels/find-job/" class="hiredots-btn"><span>Read More</span></a>
                            </div>
                        </div>
                    </div>
                    
                    
                    
                </div><!-- /.row -->
                <div style="display: flex; justify-content: center; margin-top: 20px;">
                    <a href="/professionals/find-job.html" class="hiredots-btn">View more jobs</a>
                </div>
            </div><!-- /.container -->
        </section><!-- /.service-one -->
        <!-- Call To Action Start -->
        <section class="service-one" style="background-image: linear-gradient(135deg, #e3fdf5 10%, #ffe6fa);  margin-top: 50px;">
            <div class="container">
                <div class="sec-title text-center">

                    <h6 class="sec-title__tagline">OUR TENDERS</h6><!-- /.sec-title__tagline -->

                    <h3 class="sec-title__title">Recent Tenders</h3><!-- /.sec-title__title -->
                </div><!-- /.sec-title -->
                <div class="row gutter-y-30">
                    <div class="col-md-6 col-lg-4">
                        <div class="service-one-card service-card-two" data-wow-duration="1500ms" data-wow-delay="${index}ms">
                            <div class="service-one-card__image">
                                <img src="./images/34FinalPhotos/IMG-20240320-WA0018.jpg" alt="${job.title}">
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
                                <img src="./images/34FinalPhotos/IMG-20240320-WA0038.jpg" alt="${job.title}">
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
                                <img src="./images/34FinalPhotos/IMG-20240320-WA0018.jpg" alt="${job.title}">
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

        <section class="service-one" style="background-image: url(assets/images/shapes/service-bg-1.jpg);">
            <div class="container">
                <div class="sec-title text-center">

                    <h6 class="sec-title__tagline">SEMINERS</h6><!-- /.sec-title__tagline -->

                    <h3 class="sec-title__title">Join free seminers</h3><!-- /.sec-title__title -->
                </div><!-- /.sec-title -->
                <div class="row gutter-y-30">
                    <div class="col-md-6 col-lg-4">
                        <div class="service-one-card service-card-two" data-wow-duration="1500ms" data-wow-delay="${index}ms">
                            <div class="service-one-card__image">
                                <img src="./images/34FinalPhotos/IMG-20240320-WA0018.jpg" alt="${job.title}">
                            </div>
                            <div class="service-one-card__content">
                                <h3  class="service-one-card__title">
                                    <a href="${job.link}">Introduction to Data Science Workshop</a>
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
                                <img src="./images/34FinalPhotos/IMG-20240320-WA0018.jpg" alt="${job.title}">
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
                                <img src="./images/34FinalPhotos/IMG-20240320-WA0018.jpg" alt="${job.title}">
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

        <section class="blog-one" style="background-color: rgb(253, 245, 223);">
            <div class="container">
                <div class="sec-title text-center">

                    <h6 class="sec-title__tagline">News Updates</h6><!-- /.sec-title__tagline -->

                    <h3 class="sec-title__title">Latest Articles & <br>News from the Blogs</h3><!-- /.sec-title__title -->
                </div><!-- /.sec-title -->
                <div class="blog-one__carousel hiredots-owl__carousel hiredots-owl__carousel--with-shadow hiredots-owl__carousel--basic-nav owl-carousel owl-theme" data-owl-options='{
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
         <div class="client-carousel ">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3">
                        <h3 class="client-carousel__title">Trusted and funded by more<br> then 800 companies</h3>
                    </div>
                    <div class="col-xl-9">
                        <div class="client-carousel__one hiredots-owl__carousel owl-theme owl-carousel" data-owl-options='{
                    "items": 5,
                    "margin": 65,
                    "smartSpeed": 700,
                    "loop":true,
                    "autoplay": 6000,
                    "nav":false,
                    "dots":false,
                    "navText": ["<span class=\"fa fa-angle-left\"></span>","<span class=\"fa fa-angle-right\"></span>"],
                    "responsive":{
                        "0":{
                            "items":1,
                            "margin": 0
                        },
                        "360":{
                            "items":2,
                            "margin": 30
                        },
                        "575":{
                            "items":3,
                            "margin": 30
                        },
                        "768":{
                            "items":3,
                            "margin": 40
                        },
                        "992":{
                            "items": 4,
                            "margin": 40
                        },
                        "1200":{
                            "items": 5
                        }
                    }
                    }'>
                            <div class="client-carousel__one__item">
                                <img src="https://kgo.googleusercontent.com/profile_vrt_raw_bytes_1587515358_10512.png" alt="hiredots">
                            </div><!-- /.owl-slide-item-->
                            <div class="client-carousel__one__item">
                                <img src="https://kgo.googleusercontent.com/profile_vrt_raw_bytes_1587515400_10885.png" alt="hiredots">
                            </div><!-- /.owl-slide-item-->
                            <div class="client-carousel__one__item">
                                <img src="https://cdn.mos.cms.futurecdn.net/8gzcr6RpGStvZFA2qRt4v6-1200-80.jpg" alt="hiredots">
                            </div><!-- /.owl-slide-item-->
                            <div class="client-carousel__one__item">
                                <img src="https://help.twitter.com/content/dam/help-twitter/brand/logo.png" alt="hiredots">
                            </div><!-- /.owl-slide-item-->
                            <div class="client-carousel__one__item">
                                <img src="https://elements.envato.com/favicon.ico" alt="hiredots">
                            </div><!-- /.owl-slide-item-->
                            <div class="client-carousel__one__item">
                                <img src="https://s.w.org/style/images/about/WordPress-logotype-wmark.png" alt="hiredots">
                            </div><!-- /.owl-slide-item-->
                            <div class="client-carousel__one__item">
                                <img src="https://static.whatsapp.net/rsrc.php/v3/y7/r/DSxOAUB0raA.png" alt="hiredots">
                            </div><!-- /.owl-slide-item-->
                            <div class="client-carousel__one__item">
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRXpU79_HFRNHqW4SiJq2bGMZnf9svidTueYk3QjdY&usqp=CAE&s" alt="hiredots">
                            </div><!-- /.owl-slide-item-->
                            <div class="client-carousel__one__item">
                                <img src="https://cdn.britannica.com/94/193794-050-0FB7060D/Adidas-logo.jpg" alt="hiredots">
                            </div><!-- /.owl-slide-item-->
                            <div class="client-carousel__one__item">
                                <img src="https://www.wikipedia.org/portal/wikipedia.org/assets/img/Wikipedia-logo-v2.png" alt="hiredots">
                            </div><!-- /.owl-slide-item-->
                        </div><!-- /.thm-owl__slider -->
                    </div>
                </div>
                <div class="client-carousel__border"></div>
            </div><!-- /.container -->
        </div><!-- /.client-carousel -->

        <?php
            include_once('./component/footer.php') ; 
        ?> 

    </div>
    <!-- /.page-wrapper -->



    <div class="mobile-nav__wrapper">
        <div class="mobile-nav__overlay mobile-nav__toggler"></div>
        <!-- /.mobile-nav__overlay -->
        <div class="mobile-nav__content">
            <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>
            <div class="logo-box">
                <a href="index.html" aria-label="logo image"><img src="assets/images/logos/logo-for-dark.png" width="155" alt=""></a>
            </div>
            <!-- /.logo-box -->
            <div class="mobile-nav__container"></div>
            <!-- /.mobile-nav__container -->
            <ul class="mobile-nav__contact list-unstyled">
                <li>
                    <i class="fa fa-envelope"></i>
                    <a href="mailto:info@jobpaw.com">info@jobpaw.com</a>
                </li>
                <li>
                    <i class="fa fa-phone-alt"></i>
                    <a href="tel:666-888-0000">+(509) 3701 9232</a>
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
    <script src="./scripts/home.js"></script>
    <script src="./scripts/nav.js"></script>
    <!-- template js -->
    <script src="assets/js/hiredots.js"></script>
</body>

</html>