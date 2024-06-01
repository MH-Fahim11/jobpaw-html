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
                    <h2 class="page-header__title">Publier une offre d’emploi</h2>
                    <ul class="hiredots-breadcrumb list-unstyled">
                        <li>
                            <a href="/">Home</a>
                        </li>
                        <li>
                            <span>Erofessionals</span>
                        </li>
                        <li>
                            <span>Publier une offre d’emploi</span>
                        </li>
                    </ul>
                </div>
            </section>
        </div>
        <!-- main-slider-end -->
        <!-- Feature Start -->
        <div class="container my-5">
            <h2>Publier une offre d’emploi</h2>
            <p>La publication d’une offre d’emploi se fait en copiant et en collant les textes de votre fichier dans les champs ci-dessous. Les champs avec un astérisque (*) sont obligatoires.</p>
            <p>Cliquer ici pour voir tous les domaines et spécialités associés afin de faire le bon choix. Les domaines et spécialités sont liés à la qualification principale du candidat.</p>

            <form class="row g-3">
                <div class="col-md-6 ">
                    <label for="" class="form-label">Stage et Offre d'emploi - Prix (jusqu’à un mois):</label>
                    <input type="text" class="form-control " disabled id="" placeholder="USD 250">
                </div>
                <div class="col-md-6">
                    <label for="" class="form-label">Coupon Rabais :</label>
                    <input type="text" class="form-control" id="">
                </div>
                <div class="col-md-6">
                    <label for="" class="form-label">Domaine d’activité <span class=" text-danger">*</span> :</label>
                    <select id="inputState" class="form-select">
                    <option value="">- - Choisir un domaine - -</option>
                        <option value="2">Agriculture – Agroalimentaire</option><option value="3">Architecture, Urbanisme et Aménagement du </option><option value="4">Arts, Culture, Design et mode</option><option value="5">Biologie/Chimie</option><option value="7">Communication et Journalisme</option><option value="36">Douane</option><option value="8">Droit</option><option value="9">Environnement et Sciences de la Terre</option><option value="52">Géologie</option><option value="11">Langues et Lettres</option><option value="12">Management/Gestion, Finance, Comptabilité </option><option value="41">Marketing</option><option value="13">Mathématiques/Physique</option><option value="42">Mécanique</option><option value="27">Métiers de l'air</option><option value="31">Métiers du bâtiment et autres</option><option value="15">Santé et Professions médicales</option><option value="16">Sciences de l’Education</option><option value="17">Sciences de l’Ingénieur</option><option value="18">Sciences économiques et politiques</option><option value="19">Sciences Humaines et Sociales</option><option value="10">Sciences Informatiques</option><option value="45">Secrétariat</option><option value="56">Sécurité</option><option value="21">Tourisme, Hôtellerie et Restauration</option><option value="22">Transport et Logistique</option>
            
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="" class="form-label">Spécialité <span class=" text-danger">*</span> :</label>
                    <select id="inputState" class="form-select">
                        <option selected value=""></option>
            
                    </select>
                </div>

                <div class="col-md-6">
                    <label for="" class="form-label">Titre du poste<span class=" text-danger">*</span> :</label>
                    <input type="text" class="form-control" id="">
                </div>
                <div class="col-md-6">
                    <label for="" class="form-label">Nombre de postes<span class=" text-danger">*</span> :</label>
                    <input type="number" class="form-control" id="">
                </div>

                <div class="col-md-6">
        
                    <label for="" class="form-label">Date limite de réception de dossier <span class=" text-danger">*</span> :</label>
                    <div class="d-flex">
                        <select id="inputState" class="form-select">
                            <option selected>Jour</option>
                            <option >1</option>
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

                    
                        <select id="inputState" class="form-select">
                                <option value="0" selected>	Mois</option>
                                <option value="1">Janvier</option>
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
                        <input type="text" class="form-control" id="" placeholder="	Année">

                    </div>
                </div>

                <div class="col-md-6">
                    <label for="" class="form-label">Afficher Compagnie :</label>
                    <select id="inputState" class="form-select">
                        <option selected value=""></option>
            
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="" class="form-label">Pays <span class=" text-danger">*</span> :</label>
                    <select id="inputState" class="form-select">
                        <option selected value="">- - Choisir un pays - -</option>
            
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="" class="form-label">Ville <span class=" text-danger">*</span> :</label>
                    <select id="inputState" class="form-select">
                        <option selected value="">- - Choisir un pays - -</option>
            
                    </select>
                </div>

                <div class="col-md-12">
                    <label for="" class="form-label">Zone:</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="2"></textarea>
                    <div class=" text-danger">Remplir le champ zone pour donner plus de précision sur la localisation du poste</div>
                </div>
                
                <div class="col-md-12">
                    <label for="" class="form-label">Durée :</label>
                    <input type="text" class="form-control" id="">
                </div>

                <div class="col-md-6">
                    <label for="" class="form-label">Introduction:</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="2"></textarea>
                </div>
                <div class="col-md-6">
                    <label for="" class="form-label">Fonction<span class=" text-danger">*</span>:</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="2"></textarea>
                </div>
                <div class="col-md-6">
                    <label for="" class="form-label">Qualifications réquises<span class=" text-danger">*</span>:</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="2"></textarea>
                </div>
                <div class="col-md-6">
                    <label for="" class="form-label">Conditions particulières:</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="2"></textarea>
                </div>
                <div class="col-md-6">
                    <label for="" class="form-label">Conditions de travail:</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="2"></textarea>
                </div>
                <div class="col-md-6">
                    <label for="" class="form-label">Dossier de candidature doit avoir ... <span class=" text-danger">*</span>:</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="2"></textarea>
                </div>
                <div class="col-md-6">
                    <label for="" class="form-label">Envoyer le dossier à <span class=" text-danger">*</span>:</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="2"></textarea>
                </div>
                <div class="col-md-6">
                    <label for="" class="form-label">Remarques contact :</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="2"></textarea>
                </div>
                <div class="col-md-12">
                    <label for="" class="form-label">Autres remarques :</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="2"></textarea>
                </div>
                <div class="col-md-12" style="background-color: #f9f9f9;">
                    <h3>Dossier de candidature envoyé par e-mail interne cachée</h3>
                    <p>Inscrire uniquement dans le champ ci-dessous le ou les adresse(s) e-mail(s) de réception des candidatures</p>
                    <input type="text" class="form-control" id="">
                    <p>Ce faisant, en cliquant, après la date limite, sur "<a class=" text-danger" href="">candidatures reçues par offre</a>", vous aurez accès à un tableau de bord des candidatures par offre.</p>
                    <p>Vous aurez aussi un<a class=" text-danger" href="https://www.jobpaw.com/assets/pdf/Filtrage_Candidats_JOBPAW.jpg"> système de filtrage qui donne, en un clic, tous les candidats correspondant à vos critères.</a> </p>
                    <p><a class=" text-danger" href="https://www.jobpaw.com/pont/prive/contacts.php?id=3&message_sujet=Je%20voudrais%20utiliser%20le%20syst%C3%A8me%20de%20filtrage">Cliquez ici et avisez-nous</a> si vous avez des questions sur le fonctionnement du système de filtrage qui simplifie et facilite le recrutement.</p>
                    <p>En cliquant ci-dessous, je déclare avoir lu et accepté les <a class=" text-danger" href="http://www.jobpaw.com/assets/pdf/JobPaw-Publicite.pdf">coûts et avantages de publication des stages et offres d’emploi téléchargeables ici.</a> </p>
                    <p>Une facture vous sera envoyée par e-mail avec des instructions pour le<span class=" text-danger"> paiement par carte bancaire ou par virement bancaire.</span></p>

                </div>


                

                <div class="col-12">
                    <button type="submit" class="btn btn-primary">Poster offre d’emploi</button>
                </div>
            </form>
        
        </div>
        
        <?php
            $logo ="./../../assets/images/logos/logo-dark.png";
            include_once('./../../component/footer.php') ; 
        ?>

    </div>
    <!-- /.page-wrapper -->



    <div class="mobile-nav__wrapper">
        <div class="mobile-nav__overlay mobile-nav__toggler"></div>
        <!-- /.mobile-nav__overlay -->
        <div class="mobile-nav__content">
            <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>
            <div class="logo-box">
                <a href="index.html" aria-label="logo image"><img src="../../assets/images/logos/logo-for-dark.png" width="155" alt=""></a>
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

    <script src="../../scripts/entreprisesPrivate.js"></script>
    <!-- template js -->
    <script src="../../assets/js/hiredots.js"></script>
    
</body>

</html>