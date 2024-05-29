<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>
      Services || Hiredots || Human Resources & Recruiting HTML Template
    </title>
    <!-- favicons Icons -->
    <link
      rel="apple-touch-icon"
      sizes="180x180"
      href="assets/images/favicons/apple-touch-icon.png"
    />
    <link
      rel="icon"
      type="image/png"
      sizes="32x32"
      href="assets/images/favicons/favicon-32x32.png"
    />
    <link
      rel="icon"
      type="image/png"
      sizes="16x16"
      href="assets/images/favicons/favicon-16x16.png"
    />
    <link rel="manifest" href="assets/images/favicons/site.webmanifest" />
    <meta
      name="description"
      content="Hiredots is a modern HTML Template HR services, Recruiting Agency, Recruiting Business, Hire Employees, Recruiting Consulting, Job Posting, Interviewing Services websites and businesses."
    />

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Manrope:wght@300;400;500;600;700;800&display=swap"
      rel="stylesheet"
    />
    <!-- reey font -->
    <link rel="stylesheet" href="assets/vendors/reey-font/stylesheet.css" />

    <link
      rel="stylesheet"
      href="assets/vendors/bootstrap/css/bootstrap.min.css"
    />
    <link
      rel="stylesheet"
      href="assets/vendors/bootstrap-select/bootstrap-select.min.css"
    />
    <link rel="stylesheet" href="assets/vendors/animate/animate.min.css" />
    <link rel="stylesheet" href="assets/vendors/fontawesome/css/all.min.css" />
    <link rel="stylesheet" href="assets/vendors/jquery-ui/jquery-ui.css" />
    <link rel="stylesheet" href="assets/vendors/jarallax/jarallax.css" />
    <link
      rel="stylesheet"
      href="assets/vendors/jquery-magnific-popup/jquery.magnific-popup.css"
    />
    <link
      rel="stylesheet"
      href="assets/vendors/nouislider/nouislider.min.css"
    />
    <link
      rel="stylesheet"
      href="assets/vendors/nouislider/nouislider.pips.css"
    />
    <link rel="stylesheet" href="assets/vendors/slick/slick.css" />
    <link rel="stylesheet" href="assets/vendors/hiredots-icons/style.css" />
    <link
      rel="stylesheet"
      href="assets/vendors/owl-carousel/css/owl.carousel.min.css"
    />
    <link
      rel="stylesheet"
      href="assets/vendors/owl-carousel/css/owl.theme.default.min.css"
    />

    <!-- template styles -->
    <link rel="stylesheet" href="assets/css/hiredots.css" />
  </head>

  <body class="custom-cursor">
    <div class="custom-cursor__cursor"></div>
    <div class="custom-cursor__cursor-two"></div>

    <div class="preloader">
      <div
        class="preloader__image"
        style="background-image: url(assets/images/loader.png)"
      ></div>
    </div>
    <!-- /.preloader -->
 

    <header  class="main-header sticky-header sticky-header--normal">
        <?php
            $title = 'Home';
            $page = 'home'; 
            include_once('component/navBar.php') ; 
        ?>    
        </header>
      <section class="page-header">
        <div class="page-header__bg"></div>
        <div class="page-header__shape">
          <img
            src="assets/images/shapes/page-header-shape.png"
            alt="hiredots"
          />
        </div>
        <!-- /.page-header__bg -->
        <div class="container">
          <h2 class="page-header__title">Services</h2>
          <ul class="hiredots-breadcrumb list-unstyled">
            <li><a href="index.html">Home</a></li>
            <li><span>Services</span></li>
          </ul>
          <!-- /.thm-breadcrumb list-unstyled -->
        </div>
        <!-- /.container -->
      </section>
      <!-- /.page-header -->

      <section class="service-one service-one--page">
        <div class="container">
          <div class="row gutter-y-30" id="service-list">
            <!-- Service items will be inserted here by JavaScript -->
            
          </div>
        </div>
      </section>

      <footer class="main-footer background-black">
        <div
          class="main-footer__bg"
          style="background-image: url(assets/images/backgrounds/footer-bg.jpg)"
        ></div>
        <!-- /.main-footer__bg -->
        <div class="main-footer__subscribe">
          <div class="container">
            <div class="main-footer__subscribe__wrapper">
              <div class="main-footer__subscribe__left">
                <span class="main-footer__subscribe__icon"
                  ><i class="icon-message"></i
                ></span>
                <h3 class="main-footer__subscribe__title">
                  Subscribe Now to Get <br />
                  Latest Updates
                </h3>
              </div>
              <div class="main-footer__subscribe__right">
                <form
                  action="#"
                  data-url="MAILCHIMP_FORM_URL"
                  class="main-footer__newsletter mc-form"
                >
                  <input type="text" name="EMAIL" placeholder="Email address" />
                  <button type="submit" class="fas fa-paper-plane">
                    <span class="sr-only">submit</span
                    ><!-- /.sr-only -->
                  </button>
                </form>
                <!-- /.footer-widget__newsletter mc-form -->
                <div class="mc-form__response"></div>
                <!-- /.mc-form__response -->
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
                    <img
                      src="assets/images/logo-light.png"
                      width="125"
                      alt="Hiredots HTML Template"
                    />
                  </a>
                  <p class="footer-widget__text">
                    Lorem ipsum dolor sit amet, consect etur adi pisicing elit
                    <br />
                    sed do eiusmod tempor incididunt ut labore.
                  </p>
                  <div class="footer-widget__author">
                    <div class="footer-widget__author__img">
                      <img
                        src="assets/images/resources/footer-about-avata.png"
                        alt=""
                      />
                    </div>
                    <div>
                      <div class="footer-widget__author__info">
                        <span class="footer-widget__author__tagline"
                          >Need Help?</span
                        >
                        <h3 class="footer-widget__author__title">
                          <a href="contact.html">Book Appointment </a>
                        </h3>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /.footer-widget -->
              </div>
              <!-- /.col-md-6 -->
              <div class="col-md-6 col-xl-2">
                <div class="footer-widget footer-widget--links">
                  <h2 class="footer-widget__title">Explore</h2>
                  <!-- /.footer-widget__title -->
                  <ul class="list-unstyled footer-widget__links">
                    <li><a href="about.html">About Company</a></li>
                    <li><a href="team.html">Meet the Team</a></li>
                    <li><a href="blog.html">News & Media</a></li>
                    <li><a href="project.html">Our Projects</a></li>
                    <li><a href="contact.html">Contact</a></li>
                  </ul>
                  <!-- /.list-unstyled footer-widget__links -->
                </div>
                <!-- /.footer-widget -->
              </div>
              <!-- /.col-md-6 -->
              <div class="col-md-6 col-xl-2">
                <div class="footer-widget footer-widget--contact">
                  <h2 class="footer-widget__title">Links</h2>
                  <!-- /.footer-widget__title -->
                  <ul class="list-unstyled footer-widget__links">
                    <li><a href="about.html">Apply Now</a></li>
                    <li><a href="contact.html">Contract to Hire</a></li>
                    <li><a href="team.html">Direct Hire</a></li>
                    <li><a href="history.html">Executive Search</a></li>
                    <li><a href="about.html">Our Solutions</a></li>
                  </ul>
                  <!-- /.list-unstyled footer-widget__links -->
                </div>
                <!-- /.footer-widget -->
              </div>
              <!-- /.col-md-6 -->
              <div class="col-md-6 col-xl-3">
                <div class="footer-widget footer-widget--time">
                  <h2 class="footer-widget__title">Contact</h2>
                  <!-- /.footer-widget__title -->
                  <p class="footer-widget__text">
                    66 Road Broklyn Street, 600 <br />
                    New York, USA
                  </p>
                  <!-- /.footer-widget__text -->
                  <ul class="list-unstyled footer-widget__info">
                    <li>
                      <i class="fas fa-envelope"></i>
                      <a href="mailto:needhelp@company.com"
                        >needhelp@company.com</a
                      >
                    </li>
                    <li>
                      <i class="fas fa-phone-square"></i>
                      <a href="tel:+92(8800)-6930">+ 92 ( 8800 ) - 6930</a>
                    </li>
                  </ul>
                  <!-- /.list-unstyled -->
                </div>
                <!-- /.footer-widget -->
              </div>
              <!-- /.col-md-6 -->
            </div>
            <!-- /.row -->
          </div>
          <!-- /.container -->
        </div>
        <!-- /.main-footer__top -->
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
              </div>
              <!-- /.footer-widget__social -->
              <p class="main-footer__copyright">
                &copy; Copyright <span class="dynamic-year"></span> by Hiredots
                HTML Template.
              </p>
            </div>
            <!-- /.main-footer__inner -->
          </div>
          <!-- /.container -->
        </div>
        <!-- /.main-footer__bottom -->
      </footer>
      <!-- /.main-footer -->
    </div>
    <!-- /.page-wrapper -->

    <div class="mobile-nav__wrapper">
      <div class="mobile-nav__overlay mobile-nav__toggler"></div>
      <!-- /.mobile-nav__overlay -->
      <div class="mobile-nav__content">
        <span class="mobile-nav__close mobile-nav__toggler"
          ><i class="fa fa-times"></i
        ></span>
        <div class="logo-box">
          <a href="index.html" aria-label="logo image"
            ><img src="assets/images/logo-light.png" width="155" alt=""
          /></a>
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
        </ul>
        <!-- /.mobile-nav__contact -->
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
        </div>
        <!-- /.mobile-nav__social -->
      </div>
      <!-- /.mobile-nav__content -->
    </div>
    <!-- /.mobile-nav__wrapper -->
    <div class="search-popup">
      <div class="search-popup__overlay search-toggler"></div>
      <!-- /.search-popup__overlay -->
      <div class="search-popup__content">
        <form role="search" method="get" class="search-popup__form" action="#">
          <input type="text" id="search" placeholder="Search Here..." />
          <button
            type="submit"
            aria-label="search submit"
            class="hiredots-btn hiredots-btn--base"
          >
            <span><i class="icon-magnifying-glass"></i></span>
          </button>
        </form>
      </div>
      <!-- /.search-popup__content -->
    </div>
    <!-- /.search-popup -->

    <a href="#" data-target="html" class="scroll-to-target scroll-to-top">
      <span class="scroll-to-top__text">back top</span>
      <span class="scroll-to-top__wrapper"
        ><span class="scroll-to-top__inner"></span
      ></span>
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
    <script src="./scripts/services.js"></script>
    <!-- template js -->
    <script src="assets/js/hiredots.js"></script>
  </body>
</html>
