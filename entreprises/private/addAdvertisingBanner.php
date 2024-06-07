<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jobpaw | professionals</title>
    <!-- favicons Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="../../../assets/images/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../../../assets/images/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../../assets/images/favicons/favicon-16x16.png">
    <link rel="manifest" href="../../assets/images/favicons/site.webmanifest">
    <meta name="description" content="Hiredots is a modern HTML Template HR services, Recruiting Agency, Recruiting Business, Hire Employees, Recruiting Consulting, Job Posting, Interviewing Services websites and businesses.">

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <!-- reey font -->
    <link rel="stylesheet" href="../../assets/vendors/reey-font/stylesheet.css">


    <link rel="stylesheet" href="../../assets/vendors/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../assets/vendors/bootstrap-select/bootstrap-select.min.css">
    <link rel="stylesheet" href="../../assets/vendors/animate/animate.min.css">
    <link rel="stylesheet" href="../../assets/vendors/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="../../assets/vendors/jquery-ui/jquery-ui.css">
    <link rel="stylesheet" href="../../assets/vendors/jarallax/jarallax.css">
    <link rel="stylesheet" href="../../assets/vendors/jquery-magnific-popup/jquery.magnific-popup.css">
    <link rel="stylesheet" href="../../assets/vendors/nouislider/nouislider.min.css">
    <link rel="stylesheet" href="../../assets/vendors/nouislider/nouislider.pips.css">
    <link rel="stylesheet" href="../../assets/vendors/slick/slick.css">
    <link rel="stylesheet" href="../../assets/vendors/hiredots-icons/style.css">
    <link rel="stylesheet" href="../../assets/vendors/owl-carousel/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../../assets/vendors/owl-carousel/css/owl.theme.default.min.css">
    
    <!-- template styles -->
    <link rel="stylesheet" href="../../assets/css/hiredots.css">
</head>

<body class="custom-cursor">

    <div class="custom-cursor__cursor"></div>
    <div class="custom-cursor__cursor-two"></div>

    <div class="preloader">
        <div class="preloader__image" style="background-image: url(../../assets/images/loader.png);"></div>
    </div>
        <header  class="main-header sticky-header sticky-header--normal">
        <?php
            $logo = "../../../assets/images/logos/logo-light.png";
            include_once('../../component/navBar.php') ; 
        ?>    
        </header>
        <!-- main-slider-start -->
        <div>
            <section class="page-header">
                <div class="page-header__bg"></div>
                <div class="page-header__shape">
                    <img src="./../../images/shapes/page-header-shape.png" alt="jobpaw">
                </div>
                <div class="container">
                    <h2 class="page-header__title">Add an advertising banner</h2>
                    <ul class="hiredots-breadcrumb list-unstyled">
                        <li>
                            <a href="/">Home</a>
                        </li>
                        <li>
                            <span>Entreprises</span>
                        </li>
                        <li>
                            <span>Add an advertising banner</span>
                        </li>
                    </ul>
                </div>
            </section>
        </div>
        <!-- main-slider-end -->
        <!-- Feature Start -->
        <div class="container my-5">
            <form class="row g-3">
                <div class="col-md-6 ">
                    <label for="" class="form-label">Banniere Publicitaire - Prix (jusqu’à une semaine) :</label>
                    <input type="text" class="form-control" id="" placeholder="USD 250">
                </div>
                <div class="col-md-6">
                    <label for="" class="form-label">Coupon Rabais :</label>
                    <input type="text" class="form-control" id="">
                </div>

                <div class="col-md-4 ">
                    <label for="" class="form-label">Thème<span className=" text-danger">*</span>:</label>
                    <input type="text" class="form-control" id="" placeholder="USD 250">
                </div>
                <div class="col-md-4">
                    <label for="" class="form-label">Type <span className=" text-danger">*</span> :</label>
                    <select id="inputState" class="form-select">
                        <option selected>- - Choisir - -</option>
                        <option>3 - Bannière principale</option>
                    </select>
                </div>
                <div class="col-md-4">
                    <label for="" class="form-label">Page<span className=" text-danger">*</span> :</label>
                    <select id="inputState" class="form-select">
                        <option selected>- - Choisir - -</option>
                        <option>../index.php</option>
                    </select>
                </div>

                <div class="col-md-6">
                    <label for="" class="form-label">Bannière :</label>
                    <input type="file" class="form-control" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload">
                    
                    <div  class=" text-danger ">
                        Seules les bannières de taille max 800KB et de format: .jpg, .jpeg, .png sont acceptées
                    </div>
                </div>
                <div class="col-md-6 ">
                    <label for="" class="form-label">Prix USD/semaine de publicité *:</label>
                    <input type="text" class="form-control" id="" placeholder="USD 250">
                </div>
                
                <!-- DATE  -->

                <label for="" class="form-label">Date début :</label>
                <div class="col-md-2 mb-4">
                    <label for="" class="form-label">Jour</label>
                    
                        <select id="inputState" class="form-select col-md-6">
                            <option selected>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                            <option>6</option>
                            <option>7</option>
                            <option>8</option>
                            <option>9</option>
                            <option>10</option>
                            <option>11</option>
                            <option>12</option>
                            <option>13</option>
                            <option>14</option>
                            <option>15</option>
                            <option>16</option>
                            <option>17</option>
                            <option>18</option>
                            <option>19</option>
                            <option>20</option>
                            <option>21</option>
                            <option>22</option>
                            <option>23</option>
                            <option>24</option>
                            <option>25</option>
                            <option>26</option>
                            <option>27</option>
                            <option>28</option>
                            <option>29</option>
                            <option>30</option>
                            <option>31</option>
                        </select>

                </div>
                <div class="col-md-4 mb-4">
                    <label for="" class="form-label">Date début</label>
                        <select id="inputState" class="form-select col-md-6">
                           
                            <option value="1" selected>Janvier</option>
                            <option value="2">Février</option>
                            <option value="3">Mars</option>
                            <option value="4">Avril</option>
                            <option value="5">Mai</option>
                            <option value="6">Juin</option>
                            <option value="7">Juillet</option>
                            <option value="8">Août</option>
                            <option value="9">Septembre</option>
                            <option value="10">Octobre</option>
                            <option value="11">Novembre</option>
                            <option value="12">Décembre</option>
                        </select>
                </div>
                <div class="col-md-2 mb-4">
                    <label for="" class="form-label">Année :</label>
                    <input type="text" class="form-control" id="">
                </div>
                <div class="col-md-2 mb-4">
                    <label for="" class="form-label">Heure</label>
                        <select id="inputState" class="form-select col-md-6">
                            <option value="0">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                            <option value="13">13</option>
                            <option value="14">14</option>
                            <option value="15">15</option>
                            <option value="16">16</option>
                            <option value="17">17</option>
                            <option value="18">18</option>
                            <option value="19">19</option>
                            <option value="20">20</option>
                            <option value="21">21</option>
                        </select>
                </div>
                <div class="col-md-2 mb-4">
                    <label for="" class="form-label">Minute</label>
                        <select id="inputState" class="form-select col-md-6">
                            <option value="0">00</option>
                            <option value="1">15</option>
                            <option value="2">30</option>
                            <option value="3">45</option>
                        </select>
                </div>
                <label for="" class="form-label">Date fin (Par défaut 1 an) :</label>
                <div class="col-md-2 mb-4">
                    <label for="" class="form-label">Jour</label>
                    
                        <select id="inputState" class="form-select col-md-6">
                            <option selected>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                            <option>6</option>
                            <option>7</option>
                            <option>8</option>
                            <option>9</option>
                            <option>10</option>
                            <option>11</option>
                            <option>12</option>
                            <option>13</option>
                            <option>14</option>
                            <option>15</option>
                            <option>16</option>
                            <option>17</option>
                            <option>18</option>
                            <option>19</option>
                            <option>20</option>
                            <option>21</option>
                            <option>22</option>
                            <option>23</option>
                            <option>24</option>
                            <option>25</option>
                            <option>26</option>
                            <option>27</option>
                            <option>28</option>
                            <option>29</option>
                            <option>30</option>
                            <option>31</option>
                        </select>

                </div>
                <div class="col-md-4 mb-4">
                    <label for="" class="form-label">Date début</label>
                        <select id="inputState" class="form-select col-md-6">
                           
                            <option value="1" selected>Janvier</option>
                            <option value="2">Février</option>
                            <option value="3">Mars</option>
                            <option value="4">Avril</option>
                            <option value="5">Mai</option>
                            <option value="6">Juin</option>
                            <option value="7">Juillet</option>
                            <option value="8">Août</option>
                            <option value="9">Septembre</option>
                            <option value="10">Octobre</option>
                            <option value="11">Novembre</option>
                            <option value="12">Décembre</option>
                        </select>
                </div>
                <div class="col-md-2 mb-4">
                    <label for="" class="form-label">Année :</label>
                    <input type="text" class="form-control" id="">
                </div>
                <div class="col-md-2 mb-4">
                    <label for="" class="form-label">Heure</label>
                        <select id="inputState" class="form-select col-md-6">
                            <option value="0">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                            <option value="13">13</option>
                            <option value="14">14</option>
                            <option value="15">15</option>
                            <option value="16">16</option>
                            <option value="17">17</option>
                            <option value="18">18</option>
                            <option value="19">19</option>
                            <option value="20">20</option>
                            <option value="21">21</option>
                        </select>
                </div>
                <div class="col-md-2 mb-4">
                    <label for="" class="form-label">Minute</label>
                        <select id="inputState" class="form-select col-md-6">
                            <option value="0">00</option>
                            <option value="1">15</option>
                            <option value="2">30</option>
                            <option value="3">45</option>
                        </select>
                </div>



                <div class="col-md-6">
                    <label for="" class="form-label">Renouvelable :</label>
                    <select id="inputState" class="form-select col-md-6">
                            <option value="0">Oui</option>
                            <option value="1">Non</option>
                        </select>
                </div>
                <div class="col-md-6 ">
                    <label for="" class="form-label">Numéro d’ordre *:</label>
                    <input type="text" class="form-control" id="" placeholder="4">
                    <div  class=" text-danger ">
                    Nous avons 4 slides numérotées 1, 2, 3, 4 pour les publicités à la page d’accueil. Choisir un numero d’ordre correspondant au numéro de slide disponible pour afficher votre bannière.
                    </div>
                </div>


                <h4>Référence :</h4>
                <div class="col-md-12">
                    <label for="" class="form-label">Lien vers :</label>
                    <select id="inputState" class="form-select col-md-6">
                            <option value="0">Aucun</option>
                            <option value="1">Lien</option>
                            <option value="2">E-Mail</option>
                            <option value="3">Document</option>
                        </select>
                </div>

                <div class="col-12">
                    <label for="inputAddress" class="form-label">Lien</label>
                    <input type="text" class="form-control" id="" placeholder="">
                </div>
                <div class="col-12">
                    <label for="inputAddress2" class="form-label">E-mail</label>
                    <input type="email" class="form-control" id="" placeholder="">
                </div>

                <div class="col-md-12">
                    <label for="" class="form-label">Document:</label>
                    <input type="file" class="form-control" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload">
                    
                    <div  class=" text-danger ">
                    Seuls les documents de taille max 3MB et de format: .doc, .docx, .pdf sont acceptés.

                    </div>
                </div>


                <div class="col-md-12">
                    <label for="" class="form-label">Description:</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>

                <div  class=" text-danger ">
                    En cliquant ci-dessous, je déclare avoir lu et accepté les <a href="https://www.jobpaw.com/assets/pdf/JobPaw-Publicite.pdf">coûts et avantages d’une bannière publicitaire téléchargeables ici.</a>

                </div>
                <div  class=" text-danger ">
                Une facture vous sera envoyée par e-mail avec des instructions pour le paiement par carte bancaire ou par virement bancaire.

                </div>
                
                <div class="col-12">
                    <button type="submit" class="btn btn-primary">Ajouter bannière </button>
                </div>
            </form>
        
        </div>
        
        <?php
            $logo ="./../../assets/images/logos/logo-dark.png";
            include_once('./../../component/footer.php') ; 
        ?>

    </div>
    <!-- /.page-wrapper -->



    <?php
            $logo ="./../../assets/images/logos/logo-dark.png";
            include_once('./../../component/mobileNav.php') ; 
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


    <script src="../../assets/vendors/jquery/jquery-3.7.0.min.js"></script>
    <script src="../../assets/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../../assets/vendors/bootstrap-select/bootstrap-select.min.js"></script>
    <script src="../../assets/vendors/jarallax/jarallax.min.js"></script>
    <script src="../../assets/vendors/jquery-ui/jquery-ui.js"></script>
    <script src="../../assets/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js"></script>
    <script src="../../assets/vendors/jquery-appear/jquery.appear.min.js"></script>
    <script src="../../assets/vendors/jquery-circle-progress/jquery.circle-progress.min.js"></script>
    <script src="../../assets/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="../../assets/vendors/jquery-validate/jquery.validate.min.js"></script>
    <script src="../../assets/vendors/nouislider/nouislider.min.js"></script>
    <script src="../../assets/vendors/slick/slick.min.js"></script>
    <script src="../../assets/vendors/wnumb/wNumb.min.js"></script>
    <script src="../../assets/vendors/owl-carousel/js/owl.carousel.min.js"></script>
    <script src="../../assets/vendors/wow/wow.js"></script>
    <script src="../../assets/vendors/imagesloaded/imagesloaded.min.js"></script>
    <script src="../../assets/vendors/isotope/isotope.js"></script>
    <script src="../../assets/vendors/countdown/countdown.min.js"></script>
    <script src="../../assets/vendors/jquery-circleType/jquery.circleType.js"></script>
    <script src="../../assets/vendors/jquery-lettering/jquery.lettering.min.js"></script>

    <script src="../../assets/js/entreprisesPrivate.js"></script>
    <!-- template js -->
    <script src="../../assets/js/hiredots.js"></script>
    
</body>

</html>