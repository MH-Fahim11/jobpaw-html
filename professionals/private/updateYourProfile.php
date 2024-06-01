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
                    <h2 class="page-header__title">Actualisez votre profil avec les champs obligatoires</h2>
                    <ul class="hiredots-breadcrumb list-unstyled">
                        <li>
                            <a href="/">Home</a>
                        </li>
                        <li>
                            <span>Professionals</span>
                        </li>
                        <li>
                            <span>Actualisez votre profil avec les champs obligatoires</span>
                        </li>
                    </ul>
                </div>
            </section>
        </div>
        <!-- main-slider-end -->
        <!-- Feature Start -->
        <div class="container my-5">
            <h2>Actualisez votre profil avec les champs obligatoires</h2>
            <p>Après avoir <span class="text-danger">rempli et sauvegardé</span>, une à une, les sections 1 à 12, vous aurez un<span class="text-danger">CVPaw Pro similaire</span>  aux modèles de CV et de lettres disponibles ici. Vous ne pourrez<span class="text-danger"> appliquer pour une offre que si les sections obligatoires sont remplies.</span></p>
            <p>Les champs avec un astérisque (<span class="text-danger">*</span>) sont obligatoires. Vous pouvez modifier les informations après sauvegarde.</p>

            <form class="row g-3">
                <div class="col-md-6">
                    <label for="" class="form-label">Prénom <span class=" text-danger">*</span> :</label>
                    <input type="text" class="form-control" id="">
                </div>
                <div class="col-md-6">
                    <label for="" class="form-label">Nom <span class=" text-danger">*</span> :</label>
                    <input type="text" class="form-control" id="">
                </div>

                <div class="col-md-6">
                    <label for="" class="form-label">Date de naissance<span class=" text-danger">*</span> :</label>
                    <div class="d-flex">
                        <div class="">
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
                        </div>    
                        <div class="">
                            
                            <select id="inputState" class="form-select">
                                    <option value="0" selected>Mois</option>
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
                        </div>
                        <div class="">
                            
                            <input type="text" class="form-control" id="" placeholder="Année">
                        </div>

                    </div>
                    
                </div>
                <div class="col-md-6">
                    <label for="" class="form-label">Sexe <span class=" text-danger">*</span> :</label>
                    <select id="inputState" class="form-select">
                                    <option value="0" selected>Masculin</option>
                                    <option value="1">Feminin</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <label for="" class="form-label">E-mail <span class=" text-danger">*</span> :</label>
                    <input type="email" class="form-control" id="">
                </div>
                <div class="col-md-3">
                    <label for="" class="form-label">Pays<span class=" text-danger">*</span> :</label>
                    <select id="inputState" class="form-select">
                        <option value="">- - Choisir pays à nouveau - -</option>
                        <option value="1">Haiti</option>
                        <option value="2">Etats-Unis</option>
                        <option value="3">Canada</option>
                        <option value="4">France</option>
                        <option value="5">Republique Dominicaine</option>
                        <option value="6">Cuba</option>
                        <option value="7">Bresil</option>
                        <option value="8">Argentine</option>
                        <option value="10">Allemagne</option>
                        <option value="11">Angleterre</option>
                        <option value="12">Nouvelle-Zelande</option>
                        <option value="13">Espagne</option>
                        <option value="14">Portugal</option>
                        <option value="15">Suisse</option>
                        <option value="16">Australie</option>
                        <option value="17">Maroc</option>
                        <option value="18">Belgique</option>
                        <option value="19">Mexique</option>
                        <option value="20">Senegal</option>
                        <option value="21">Benin</option>
                        <option value="22">Taiwan</option>
                        <option value="23">Norvege</option>
                        <option value="24">Afrique du Sud</option>
                        <option value="25">Albanie</option>
                        <option value="26">Andorre</option>
                        <option value="27">Angola</option>
                        <option value="28">Anguilla</option>
                        <option value="29">Antigua-et-Barbuda</option>
                        <option value="30">Arménie</option>
                        <option value="31">Aruba</option>
                        <option value="32">Autriche</option>
                        <option value="33">Bahamas</option>
                        <option value="34">Bangladesh</option>
                        <option value="35">Barbade</option>
                        <option value="36">Bélize</option>
                        <option value="37">Bermudes</option>
                        <option value="38">Biélorussie</option>
                        <option value="39">Birmanie</option>
                        <option value="40">Bolivie</option>
                        <option value="41">Bonaire, Saint-Eustache et Saba</option>
                        <option value="42">Bosnie-Herzégovine</option>
                        <option value="43">Botswana</option>
                        <option value="44">Bulgarie</option>
                        <option value="45">Burkina</option>
                        <option value="46">Burundi</option>
                        <option value="47">Caïmans, Îles</option>
                        <option value="48">Cambodge</option>
                        <option value="49">Cameroun</option>
                        <option value="50">Cap-Vert</option>
                        <option value="51">Centrafrique</option>
                        <option value="52">Chili</option>
                        <option value="53">Chypre</option>
                        <option value="54">Colombie</option>
                        <option value="55">Congo (Brazzaville)</option>
                        <option value="56">Congo (Kinshasa)</option>
                        <option value="57">Cook, Îles</option>
                        <option value="58">Corée du Sud</option>
                        <option value="59">Costa Rica</option>
                        <option value="60">Côte dIvoire</option>
                        <option value="61">Croatie</option>
                        <option value="62">Curaçao</option>
                        <option value="63">Danemark</option>
                        <option value="64">Dominique</option>
                        <option value="65">Équateur</option>
                        <option value="66">Estonie</option>
                        <option value="67">Éthiopie</option>
                        <option value="68">Féroé, Îles</option>
                        <option value="69">Fidji</option>
                        <option value="70">Finlande</option>
                        <option value="71">Gabon</option>
                        <option value="72">Gambie</option>
                        <option value="73">Géorgie</option>
                        <option value="74">Ghana</option>
                        <option value="75">Gibraltar</option>
                        <option value="76">Grande-Bretagne</option>
                        <option value="77">Grèce</option>
                        <option value="78">Grenade</option>
                        <option value="79">Groenland</option>
                        <option value="80">Guadeloupe</option>
                        <option value="81">Guam</option>
                        <option value="82">Guatémala</option>
                        <option value="83">Guinée équatoriale</option>
                        <option value="84">Guinée-Bissao</option>
                        <option value="85">Guyana</option>
                        <option value="86">Guyane</option>
                        <option value="87">Honduras</option>
                        <option value="88">Hong Kong</option>
                        <option value="89">Hongrie</option>
                        <option value="90">Inde</option>
                        <option value="91">Indonésie</option>
                        <option value="92">Irlande</option>
                        <option value="93">Islande</option>
                        <option value="94">Israël</option>
                        <option value="95">Italie</option>
                        <option value="96">Jamaïque</option>
                        <option value="97">Japon</option>
                        <option value="98">Kenya</option>
                        <option value="99">Kiribati</option>
                        <option value="100">Kosovo</option>
                        <option value="101">Lesotho</option>
                        <option value="102">Lettonie</option>
                        <option value="103">Libéria</option>
                        <option value="104">Lituanie</option>
                        <option value="105">Luxembourg</option>
                        <option value="106">Macao</option>
                        <option value="107">Macédoine</option>
                        <option value="108">Madagascar</option>
                        <option value="109">Mali</option>
                        <option value="110">Malte</option>
                        <option value="111">Mariannes du Nord, Îles</option>
                        <option value="112">Marshall</option>
                        <option value="113">Martinique</option>
                        <option value="114">Maurice</option>
                        <option value="115">Mayotte</option>
                        <option value="116">Micronésie</option>
                        <option value="117">Moldavie</option>
                        <option value="118">Mongolie</option>
                        <option value="119">Monténégro</option>
                        <option value="120">Mozambique</option>
                        <option value="121">Namibie</option>
                        <option value="122">Nauru</option>
                        <option value="123">Népal</option>
                        <option value="124">Nicaragua</option>
                        <option value="125">Niger</option>
                        <option value="126">Nigéria</option>
                        <option value="127">Nouvelle-Calédonie</option>
                        <option value="128">Ouganda</option>
                        <option value="129">Pakistan</option>
                        <option value="130">Palaos</option>
                        <option value="131">Panama</option>
                        <option value="132">Papouasie-Nouvelle-Guinée</option>
                        <option value="133">Paraguay</option>
                        <option value="134">Pays-Bas</option>
                        <option value="135">Pérou</option>
                        <option value="136">Philippines</option>
                        <option value="137">Pologne</option>
                        <option value="138">Polynésie française</option>
                        <option value="139">Porto Rico</option>
                        <option value="140">Réunion</option>
                        <option value="141">Roumanie</option>
                        <option value="142">Russie</option>
                        <option value="143">Saint-Barthélemy</option>
                        <option value="144">Saint-Christophe-et-Niévès</option>
                        <option value="145">Saint-Marin</option>
                        <option value="146">Saint-Martin</option>
                        <option value="147">Saint-Martin (partie néerlandaise)</option>
                        <option value="148">Saint-Pierre-et-Miquelon</option>
                        <option value="149">Saint-Vincent-et-les-Grenadines</option>
                        <option value="150">Sainte-Hélène</option>
                        <option value="151">Sainte-Lucie</option>
                        <option value="152">Salomon</option>
                        <option value="153">Salvador</option>
                        <option value="154">Samoa</option>
                        <option value="155">Samoa américaines</option>
                        <option value="156">Sao Tomé-et-Principe</option>
                        <option value="157">Serbie</option>
                        <option value="158">Seychelles</option>
                        <option value="159">Sierra Leone</option>
                        <option value="160">Slovaquie</option>
                        <option value="161">Slovénie</option>
                        <option value="162">Suède</option>
                        <option value="163">Suriname</option>
                        <option value="164">Swaziland</option>
                        <option value="165">Tchad</option>
                        <option value="166">Tchèque, République</option>
                        <option value="167">Thaïlande</option>
                        <option value="168">Timor oriental</option>
                        <option value="169">Togo</option>
                        <option value="170">Tonga</option>
                        <option value="171">Trinité-et-Tobago</option>
                        <option value="172">Turks-et-Caïcos, Îles</option>
                        <option value="173">Tuvalu</option>
                        <option value="174">Ukraine</option>
                        <option value="175">Uruguay</option>
                        <option value="176">Vanuatu</option>
                        <option value="177">Vénézuela</option>
                        <option value="178">Vierges britanniques, Îles</option>
                        <option value="179">Vierges des États-Unis, Îles</option>
                        <option value="180">Wallis et Futuna</option>
                        <option value="181">Zambie</option>
                        <option value="182">Zimbabwe</option>
                        <option value="183">Rwanda</option>
                        <option value="184">Chine</option>
                        <option value="185">Turquie</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <label for="" class="form-label">Ville de naissance<span class=" text-danger">*</span> :</label>
                    <select id="inputState" class="form-select">
                        <option value="0" selected>----</option>
                    </select>
                </div>

                <div class="col-md-3">
                    <label for="" class="form-label">Taper:</label>
                    <input type="text" class="form-control" id="" placeholder="Taer ville residence">
                </div>
                

                <div class="col-md-12">
                    <label for="" class="form-label">Adresse<span class=" text-danger">*</span>:</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="2"></textarea>
                </div>

                <div class="col-md-4">
                    <label for="" class="form-label">Cellulaire<span class=" text-danger">*</span> :</label>
                    <input type="text" class="form-control" id="">
                </div>
                <div class="col-md-4">
                    <label for="" class="form-label">Tel Bureau:</label>
                    <input type="text" class="form-control" id="">
                </div>
                <div class="col-md-4">
                    <label for="" class="form-label">Tel Domicile:</label>
                    <input type="text" class="form-control" id="">
                </div>
                <div class="col-md-4">
                    <label for="" class="form-label">Facebook:</label>
                    <input type="text" class="form-control" id="">
                </div>
                <div class="col-md-4">
                    <label for="" class="form-label">Twitter:</label>
                    <input type="text" class="form-control" id="">
                </div>
                <div class="col-md-4">
                    <label for="" class="form-label">LinkedIn:</label>
                    <input type="text" class="form-control" id="">
                </div>
                <div class="col-md-6">
                    <label for="" class="form-label">Réligion:</label>
                    <select id="inputState" class="form-select">
                                                                <option value="" selected="selected">- - Choisir ou taper une réligion - -</option>
                                                                <option value="1">Adventistes du septième jour</option>
                                                                <option value="2">Aladuras</option>
                                                                <option value="3">Anabaptistes</option>
                                                                <option value="4">Anachorètes</option>
                                                                <option value="5">Animisme</option>
                                                                <option value="6">Arianisme </option>
                                                                <option value="7">Baha'ie</option>
                                                                <option value="8">Bouddhisme</option>
                                                                <option value="9">Calvinisme </option>
                                                                <option value="11">Christianisme</option>
                                                                <option value="10">Chon dogyo</option>
                                                                <option value="12">Collégiants (xviie&nbsp;siècle)</option>
                                                                <option value="13">Confrérie des flagellants</option>
                                                                <option value="14">Confucianisme</option>
                                                                <option value="15">Cultes du cargo </option>
                                                                <option value="16">Déisme</option>
                                                                <option value="17">Donatisme</option>
                                                                <option value="18">Église anglicane</option>
                                                                <option value="19">Église baptiste</option>
                                                                <option value="20">Église catholique romaine</option>
                                                                <option value="21">Église chrétienne de lavènement</option>
                                                                <option value="22">Église chrétienne de sion</option>
                                                                <option value="23">Église congrégationaliste</option>
                                                                <option value="24">Église de dieu</option>
                                                                <option value="25">Église de jésus-christ des saints des derniers jou</option>
                                                                <option value="26">Église de lunification</option>
                                                                <option value="27">Église du christ, scientiste</option>
                                                                <option value="28">Église épiscopalienne</option>
                                                                <option value="29">Église évangélique réformée (suisse)</option>
                                                                <option value="30">Église luthérienne</option>
                                                                <option value="31">Église orthodoxe copte</option>
                                                                <option value="32">Église orthodoxe dorient</option>
                                                                <option value="33">Église orthodoxe éthiopienne</option>
                                                                <option value="34">Église orthodoxe grecque</option>
                                                                <option value="35">Église orthodoxe russe</option>
                                                                <option value="36">Église presbytérienne</option>
                                                                <option value="37">Église presbytérienne décosse</option>
                                                                <option value="38">Église réformée</option>
                                                                <option value="39">Église réformée hollandaise</option>
                                                                <option value="42">Église unie du canada</option>
                                                                <option value="43">Église unifiée</option>
                                                                <option value="44">Église unifiée du christ</option>
                                                                <option value="45">Église unitarienne</option>
                                                                <option value="46">Église wesleyenne</option>
                                                                <option value="40">Églises évangéliques</option>
                                                                <option value="41">Églises méthodistes</option>
                                                                <option value="47">Frères étroits </option>
                                                                <option value="48">Frères polonais</option>
                                                                <option value="49">Gnosticisme</option>
                                                                <option value="50">Hindouisme</option>
                                                                <option value="51">Huguenots</option>
                                                                <option value="52">Huttérites</option>
                                                                <option value="53">Islam</option>
                                                                <option value="54">Jaïnisme</option>
                                                                <option value="55">Judaïsme</option>
                                                                <option value="56">Kimbilikiti</option>
                                                                <option value="57">Lollards</option>
                                                                <option value="58">Mennonites</option>
                                                                <option value="59">Nouvel âge</option>
                                                                <option value="60">Pèlerins (puritains)</option>
                                                                <option value="61">Pentecôtistes</option>
                                                                <option value="62">Petite église polonaise</option>
                                                                <option value="63">Protestantisme</option>
                                                                <option value="64">Quakers</option>
                                                                <option value="65">Rasta</option>
                                                                <option value="66">Sandemaniens</option>
                                                                <option value="67">Satanisme</option>
                                                                <option value="68">Shinto</option>
                                                                <option value="69">Sikhisme</option>
                                                                <option value="70">Sociniens</option>
                                                                <option value="72">Taoïsme</option>
                                                                <option value="71">Témoins de Jéhovah</option>
                                                                <option value="73">Unité des frères (frères tchèques)</option>
                                                                <option value="74">Zoroastrisme</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="" class="form-label">Mobilité réduite<span class=" text-danger">*</span>:</label>
                    <select id="inputState" class="form-select">
                                    <option value="0" selected>Oui</option>
                                    <option value="1">Non</option>
                    </select>
                </div>

                <div class="col-md-6">
                    <label for="" class="form-label">Titre du CV<span class=" text-danger">*</span>:</label>
                    <input type="text" class="form-control" id="">
                    <p>
                    <span class=" text-danger">Mettre une phrase liée au poste, qui vous résume, comme:</span><br><b>Spécialiste en productivité et gestion des RH</b>
                    </p>
                </div>
                <div class="col-md-6">
                    <label for="" class="form-label">Compétences clés<span class=" text-danger">*</span>:</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    <p>
                    <span class=" text-danger">Mettre 2 à 3 phrases résumant vos compétences liées au poste, comme:</span> <br>
                    <b>A mis un recrutement ouvert en publiant sur JobPaw <br>
A changé le système d’achat en publiant sur JobPaw <br>
A obtenu des contrats d’appels d’offres sur JobPaw</b>
                    </p>
                </div>

                <div class="col-12">
                    <button class="btn btn-danger" name="button" type="submit" id="button" value="Sauvegarder">Sauvegarder</button>
                    <button class="btn btn-primary" name="button" type="submit" id="button" value="Expériences">Expériences</button>
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