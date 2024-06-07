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
                    <h2 class="page-header__title">Publish a seminar</h2>
                    <ul class="hiredots-breadcrumb list-unstyled">
                        <li>
                            <a href="/">Home</a>
                        </li>
                        <li>
                            <span>Entreprises</span>
                        </li>
                        <li>
                            <span>Publish a seminar</span>
                        </li>
                    </ul>
                </div>
            </section>
        </div>
        <!-- main-slider-end -->
        <!-- Feature Start -->
        <div class="container my-5">
            <p>En publiant votre séminaire et votre formation continue sur JobPaw, vous améliorez la <span class=" text-danger">chaine formation-production-consommation</span> et donnez une opportunité:</p>
            <ol>
                <li>aux professionnels auront à l’avance le <span class=" text-danger"> calendrier de toutes les formations</span>  et peuvent plus facilement participer. Ce qui augmentera, du coup, la <span class=" text-danger">visibilité et la rentabilité</span> des formations.</li>
                <li>aux université et écoles techniques <span class=" text-danger">d’adapter leur formation au marché.</span></li>
            </ol>
            <br>
            <h3>Publier un séminaire</h3>
            <p>La publication d’un séminaire se fait en copiant et en collant les textes de votre fichier dans les champs ci-dessous.</p>
            
            <form class="row g-3">
                <div class="col-md-6 ">
                    <label for="" class="form-label">Seminaire et Formation continue - Prix (jusqu’à un mois):</label>
                    <input type="text" class="form-control" id="" placeholder="USD 50">
                </div>
                <div class="col-md-6">
                    <label for="" class="form-label">Coupon Rabais :</label>
                    <input type="text" class="form-control" id="">
                </div>

                <div class="col-md-6">
                    <label for="" class="form-label">Domaine d’activité<span class=" text-danger">*</span> :</label>
                    <select id="inputState" class="form-select">
                        <option selected value="">- - Choisir un domaine - -</option>
                        <option value="2">Agriculture – Agroalimentaire</option><option value="3">Architecture, Urbanisme et Aménagement du </option><option value="4">Arts, Culture, Design et mode</option><option value="5">Biologie/Chimie</option><option value="7">Communication et Journalisme</option><option value="36">Douane</option><option value="8">Droit</option><option value="9">Environnement et Sciences de la Terre</option><option value="52">Géologie</option><option value="11">Langues et Lettres</option><option value="12">Management/Gestion, Finance, Comptabilité </option><option value="41">Marketing</option><option value="13">Mathématiques/Physique</option><option value="42">Mécanique</option><option value="27">Métiers de l'air</option><option value="31">Métiers du bâtiment et autres</option><option value="15">Santé et Professions médicales</option><option value="16">Sciences de l’Education</option><option value="17">Sciences de l’Ingénieur</option><option value="18">Sciences économiques et politiques</option><option value="19">Sciences Humaines et Sociales</option><option value="10">Sciences Informatiques</option><option value="45">Secrétariat</option><option value="56">Sécurité</option><option value="21">Tourisme, Hôtellerie et Restauration</option><option value="22">Transport et Logistique</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="" class="form-label">Spécialité<span class=" text-danger">*</span> :</label>
                    <select id="inputState" class="form-select">
                        <option selected value="">- - Choisir un domaine - -</option>
                    </select>
                </div>
                

                <div class="col-md-6 ">
                    <label for="" class="form-label">Thème<span class=" text-danger">*</span>:</label>
                    <input type="text" class="form-control" id="" placeholder="">
                </div>

                <div class="col-md-6">
                    <label for="" class="form-label">Date<span class=" text-danger">*</span> :</label>
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
                
                <div class="col-md-6 ">
                    <label for="" class="form-label">Heure <span class=" text-danger">*</span>:</label>
                    <input type="text" class="form-control" id="" placeholder="">
                </div>

                <div class="col-md-6">
                    <label for="" class="form-label">Ville  <span class=" text-danger">*</span> :</label>
                    <select id="inputState" class="form-select">
                        <option value="0">- - Choisir - -</option>
                        <option value="212">Afrique du Sud - Pretoria</option>
                        <option value="208">Allemagne - Berlin</option>
                        <option value="37">Angleterre - Glasgow</option>
                        <option value="36">Angleterre - Londres</option>
                        <option value="38">Argentine - Buenos Aires</option>
                        <option value="39">Belgique - Bruxelles</option>
                        <option value="40">Benin - Cotonou</option>
                        <option value="202">Cameroun - Foumban</option>
                        <option value="22">Canada - Anjou</option>
                        <option value="41">Canada - Edmonton</option>
                        <option value="42">Canada - Gatineau</option>
                        <option value="49">Canada - Kanata</option>
                        <option value="48">Canada - La Malbaie</option>
                        <option value="47">Canada - La Minerve</option>
                        <option value="46">Canada - Laval</option>
                        <option value="50">Canada - Longueuil</option>
                        <option value="44">Canada - Montreal</option>
                        <option value="43">Canada - Ontario</option>
                        <option value="45">Canada - Ottawa</option>
                        <option value="51">Canada - Pierrefonds</option>
                        <option value="52">Canada - Pointe-aux-Trembles</option>
                        <option value="53">Canada - Quebec</option>
                        <option value="61">Canada - Saint-Lambert</option>
                        <option value="59">Canada - Saint-Leonard</option>
                        <option value="60">Canada - Ste Catherine</option>
                        <option value="58">Canada - Terrebonne</option>
                        <option value="57">Canada - Vancouver</option>
                        <option value="62">Canada - Varennes</option>
                        <option value="210">Corée du Sud - Seul</option>
                        <option value="55">Cuba - Havane</option>
                        <option value="205">Équateur - Quito</option>
                        <option value="54">Espagne - Madrid</option>
                        <option value="29">Etats-Unis - Arlington</option>
                        <option value="31">Etats-Unis - Atlanta</option>
                        <option value="34">Etats-Unis - Bellport</option>
                        <option value="63">Etats-Unis - Brooklyn</option>
                        <option value="64">Etats-Unis - Fort-Lauderdale</option>
                        <option value="65">Etats-Unis - Hamilton</option>
                        <option value="66">Etats-Unis - Lake Worth</option>
                        <option value="67">Etats-Unis - Lauderhill</option>
                        <option value="200">Etats-Unis - Los Angeles</option>
                        <option value="68">Etats-Unis - Miami</option>
                        <option value="69">Etats-Unis - Miramar</option>
                        <option value="35">Etats-Unis - New Jersey</option>
                        <option value="204">Etats-Unis - Ohio</option>
                        <option value="71">Etats-Unis - Washington</option>
                        <option value="70">Etats-Unis - West Palm Beach</option>
                        <option value="19">France - Bordeaux</option>
                        <option value="20">France - Montpellier</option>
                        <option value="11">France - Paris</option>
                        <option value="18">France - Toulouse</option>
                        <option value="10">France - Valbonne</option>
                        <option value="207">Guatémala - Guatemala</option>
                        <option value="132">Haiti - Abricots</option>
                        <option value="145">Haiti - Acul du Nord</option>
                        <option value="25">Haiti - Anse d'Hainault</option>
                        <option value="175">Haiti - Anse-à-Foleur</option>
                        <option value="23">Haiti - Anse-a-Galets</option>
                        <option value="26">Haiti - Anse-a-Pitres</option>
                        <option value="24">Haiti - Anse-a-Veau</option>
                        <option value="27">Haiti - Anse-Rouge</option>
                        <option value="28">Haiti - Aquin</option>
                        <option value="21">Haiti - Arcahaie</option>
                        <option value="138">Haiti - Arnaud</option>
                        <option value="30">Haiti - Arniquet</option>
                        <option value="152">Haiti - Bahon</option>
                        <option value="170">Haiti - Baie-de-Henne</option>
                        <option value="181">Haiti - Bainet </option>
                        <option value="140">Haiti - Baraderes</option>
                        <option value="153">Haiti - Bas-Limbe</option>
                        <option value="172">Haiti - Bassin-Bleu</option>
                        <option value="129">Haiti - Beaumont</option>
                        <option value="123">Haiti - Belladere</option>
                        <option value="183">Haiti - Belle-Anse </option>
                        <option value="171">Haiti - Bombardopolis</option>
                        <option value="133">Haiti - Bonbon</option>
                        <option value="148">Haiti - Borgne</option>
                        <option value="125">Haiti - Boucan-Carre</option>
                        <option value="72">Haiti - Cabaret</option>
                        <option value="79">Haiti - Camp-Perrin</option>
                        <option value="2">Haiti - Cap-Haitien</option>
                        <option value="162">Haiti - Capotille</option>
                        <option value="164">Haiti - Caracol</option>
                        <option value="167">Haiti - Carice</option>
                        <option value="8">Haiti - Carrefour</option>
                        <option value="80">Haiti - Cavaillon</option>
                        <option value="3">Haiti - Cayes</option>
                        <option value="186">Haiti - Cayes-Jacmel</option>
                        <option value="120">Haiti - Cerca La Source</option>
                        <option value="121">Haiti - Cerca-Cavajal</option>
                        <option value="134">Haiti - Chambellan</option>
                        <option value="173">Haiti - Chansolme</option>
                        <option value="190">Haiti - Chantal</option>
                        <option value="82">Haiti - Chardonnières</option>
                        <option value="180">Haiti - Cite Soleil</option>
                        <option value="128">Haiti - Corail</option>
                        <option value="176">Haiti - Cornillon</option>
                        <option value="83">Haiti - Coteaux</option>
                        <option value="182">Haiti - Cotes-de-Fer</option>
                        <option value="13">Haiti - Croix-des-Bouquets</option>
                        <option value="84">Haiti - Dame-Marie</option>
                        <option value="6">Haiti - Delmas</option>
                        <option value="111">Haiti - Desdunes</option>
                        <option value="85">Haiti - Dessalines</option>
                        <option value="157">Haiti - Dondon</option>
                        <option value="114">Haiti - Ennery</option>
                        <option value="115">Haiti - Estere</option>
                        <option value="86">Haiti - Fermathe</option>
                        <option value="161">Haiti - Ferrier</option>
                        <option value="87">Haiti - Fond-des-Blancs</option>
                        <option value="143">Haiti - Fonds-des-Negres</option>
                        <option value="177">Haiti - Fonds-Verrettes</option>
                        <option value="75">Haiti - Fort-Liberte</option>
                        <option value="88">Haiti - Ganthier</option>
                        <option value="4">Haiti - Gonaives</option>
                        <option value="141">Haiti - Grand-Boucan</option>
                        <option value="76">Haiti - Grand-Goave</option>
                        <option value="184">Haiti - Grand-Gosier</option>
                        <option value="89">Haiti - Grande Riviere du Nord</option>
                        <option value="113">Haiti - Grande Saline</option>
                        <option value="9">Haiti - Gressier</option>
                        <option value="90">Haiti - Gros Morne</option>
                        <option value="92">Haiti - Hinche</option>
                        <option value="191">Haiti - Ile a Vache</option>
                        <option value="14">Haiti - Jacmel</option>
                        <option value="93">Haiti - Jean-Rabel</option>
                        <option value="5">Haiti - Jeremie</option>
                        <option value="94">Haiti - Kenscoff</option>
                        <option value="137">Haiti - L'Asile</option>
                        <option value="119">Haiti - La Chapelle</option>
                        <option value="95">Haiti - La Gonave</option>
                        <option value="174">Haiti - La Tortue</option>
                        <option value="187">Haiti - La Vallee</option>
                        <option value="158">Haiti - La Victoire</option>
                        <option value="96">Haiti - Lascahobas</option>
                        <option value="78">Haiti - Leogane</option>
                        <option value="194">Haiti - Les Anglais</option>
                        <option value="127">Haiti - Les Irois</option>
                        <option value="15">Haiti - Limbe</option>
                        <option value="150">Haiti - Limonade</option>
                        <option value="97">Haiti - Maissade</option>
                        <option value="192">Haiti - Maniche</option>
                        <option value="188">Haiti - Marigot</option>
                        <option value="98">Haiti - Marmelade</option>
                        <option value="146">Haiti - Milot</option>
                        <option value="73">Haiti - Miragoane</option>
                        <option value="99">Haiti - Mirebalais</option>
                        <option value="169">Haiti - Mole Saint Nicolas</option>
                        <option value="168">Haiti - Mombin-Crochu</option>
                        <option value="163">Haiti - Mont-Organise</option>
                        <option value="135">Haiti - Moron</option>
                        <option value="206">Haiti - National</option>
                        <option value="100">Haiti - Ouanaminthe</option>
                        <option value="144">Haiti - Paillant</option>
                        <option value="160">Haiti - Perches</option>
                        <option value="130">Haiti - Pestel</option>
                        <option value="7">Haiti - Petion-Ville</option>
                        <option value="77">Haiti - Petit-Goave</option>
                        <option value="136">Haiti - Petit-Trou-de-Nippes</option>
                        <option value="101">Haiti - Petite Riviere de l'Artibonite</option>
                        <option value="142">Haiti - Petite-Riviere-de-Nippes</option>
                        <option value="102">Haiti - Pignon</option>
                        <option value="155">Haiti - Pilate</option>
                        <option value="147">Haiti - Plaine-du-Nord</option>
                        <option value="139">Haiti - Plaisance-du-Sud</option>
                        <option value="154">Haiti - Plaissance</option>
                        <option value="179">Haiti - Pointe-a-Raquette</option>
                        <option value="81">Haiti - Port Salut</option>
                        <option value="196">Haiti - Port-a-Piment</option>
                        <option value="1">Haiti - Port-au-Prince</option>
                        <option value="74">Haiti - Port-de-Paix</option>
                        <option value="149">Haiti - Port-Margot</option>
                        <option value="151">Haiti - Quartier-Morin</option>
                        <option value="159">Haiti - Ranquitte</option>
                        <option value="197">Haiti - Roche-a-Bateaux</option>
                        <option value="131">Haiti - Roseaux</option>
                        <option value="103">Haiti - Saint Louis du Nord</option>
                        <option value="104">Haiti - Saint Louis du Sud</option>
                        <option value="118">Haiti - Saint Michel de l'Attalaye</option>
                        <option value="199">Haiti - Saint-Jean-du-Sud</option>
                        <option value="156">Haiti - Saint-Raphael</option>
                        <option value="165">Haiti - Sainte Suzanne</option>
                        <option value="126">Haiti - Saut-d'Eau</option>
                        <option value="124">Haiti - Savanette</option>
                        <option value="16">Haiti - St-Marc</option>
                        <option value="17">Haiti - Tabarre</option>
                        <option value="117">Haiti - Terre-Neuve</option>
                        <option value="105">Haiti - Terrier-Rouge</option>
                        <option value="107">Haiti - Thiotte</option>
                        <option value="106">Haiti - Thomassique</option>
                        <option value="178">Haiti - Thomazeau</option>
                        <option value="122">Haiti - Thomonde</option>
                        <option value="195">Haiti - Tiburon</option>
                        <option value="193">Haiti - Torbeck</option>
                        <option value="108">Haiti - Trou-du-Nord</option>
                        <option value="166">Haiti - Vallières</option>
                        <option value="109">Haiti - Verrettes</option>
                        <option value="211">Italie - Rome</option>
                        <option value="203">Luxembourg - Etttelbruck</option>
                        <option value="201">Pays-Bas - Zevenaar</option>
                        <option value="32">Republique Dominicaine - Barahona</option>
                        <option value="91">Republique Dominicaine - Higuey</option>
                        <option value="33">Republique Dominicaine - Santiago</option>
                        <option value="12">Republique Dominicaine - Santo Domingo</option>
                        <option value="213">Rwanda - Kigali</option>
                        <option value="110">Senegal - Dakar</option>
                        <option value="214">Uruguay - Montevideo</option>
                        <option value="209">Vierges des États-Unis, Îles - Carlota Amalia</option>
                    </select>
                </div>

                <div class="col-md-6 ">
                    <label for="" class="form-label">Adresse <span class=" text-danger">*</span>:</label>
                    <input type="text" class="form-control" id="" placeholder="">
                </div>
                <div class="col-md-6 ">
                    <label for="" class="form-label">Coût <span class=" text-danger">*</span>:</label>
                    <input type="text" class="form-control" id="" placeholder="">
                </div>

                <div class="col-md-6">
                    <label for="" class="form-label">Public cible<span class=" text-danger">*</span>:</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <div class="col-md-6">
                    <label for="" class="form-label">Description<span class=" text-danger">*</span>::</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>

                <div  class="  ">
                    En cliquant ci-dessous, je déclare avoir lu et accepté les  <a class=" text-danger" href="https://www.jobpaw.com/assets/pdf/JobPaw-Publicite.pdf"> coûts et avantages de publication des séminiaires et formations continues téléchargeables ici.</a>
                </div>
                <div  class="  ">
                Une facture vous sera envoyée par e-mail avec des instructions pour le <span class=" text-danger">paiement par carte bancaire ou par virement bancaire.</span>
                </div>
                
                
                <div class="col-12">
                    <button type="submit" class="btn btn-primary">Publier séminaire </button>
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