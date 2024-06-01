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
                    <h2 class="page-header__title">Publier un appel d’offres ou une consultation</h2>
                    <ul class="hiredots-breadcrumb list-unstyled">
                        <li>
                            <a href="/">Home</a>
                        </li>
                        <li>
                            <span>Entreprises</span>
                        </li>
                        <li>
                            <span>Publier un appel d’offres ou une consultation</span>
                        </li>
                    </ul>
                </div>
            </section>
        </div>
        <!-- main-slider-end -->
        <!-- Feature Start -->
        <div class="container my-5">
            <p>En continuant à publier vos consultations, vos appels d’offres et vos plans annuels de passation de marchés sur JobPaw, vous <span class=" text-danger">améliorez la chaine formation-production-consommation</span> et donnez une opportunité:</p>
            <ol>
                <li>aux entreprises d<span class=" text-danger"> ’anticiper la demand</span> et d’<span class=" text-danger">visibilité et la rentabilité</span> de qualité à un prix optimal.</li>
                <li>aux entreprises de <span class=" text-danger">trouver des contrats et marchés</span> dont la mise en œuvre nécessite le <span class=" text-danger">recrutement des professionnels.</span> </li>
            </ol>
            <br>
            <h3>Publier un appel d’offres ou une consultation</h3>
            <p>La publication d’un appel d’offres ou d’une consultation se fait en copiant et en collant les textes de votre fichier dans les champs ci-dessous. Les champs avec un astérisque (<span class="texr-danger">*</span>) sont obligatoires.</p>
            
            <form class="row g-3">
                <div class="col-md-6 ">
                    <label for="" class="form-label">Seminaire et Formation continue - Prix (jusqu’à un mois):</label>
                    <input type="text" class="form-control" id="" placeholder="USD 500">
                </div>
                <div class="col-md-6">
                    <label for="" class="form-label">Coupon Rabais :</label>
                    <input type="text" class="form-control" id="">
                </div>
                <div class="col-md-12">
                    <label for="" class="form-label">Secteur d’activité :<span class=" text-danger">*</span> :</label>
                    <select id="inputState" class="form-select">
                        <option value="">- - Choisir un secteur d’activité *- -</option>
                        <option value="1">Affaires et Services de consultation</option>
                        <option value="2">Agriculture/Elevage/Pêche</option>
                        <option value="3">Articles essentiels au foyer</option>
                        <option value="4">Artisanat et Artisans</option>
                        <option value="5">Association, Syndicats, Coopératives et ONG</option>
                        <option value="6">Assurances et Immobilier</option>
                        <option value="7">Automobiles/Véhicules</option>
                        <option value="8">Blanchisserie et teinturerie</option>
                        <option value="9">Boissons et nourriture</option>
                        <option value="10">Construction et Rénovation</option>
                        <option value="11">Equipements et services de sécurité</option>
                        <option value="12">Génératrice, Courant électrique et panneaux solaires</option>
                        <option value="13">Grossistes</option>
                        <option value="14">Impressions et Copies</option>
                        <option value="15">Machinerie/Equipement lourds</option>
                        <option value="16">Manufacture</option>
                        <option value="17">Medias et Communication</option>
                        <option value="18">Meubles, Equipements et Accessoires de bureau</option>
                        <option value="19">Pétrole, Charbon, Combustible et Gaz naturels</option>
                        <option value="20">Piscine, Spa et Appareils</option>
                        <option value="21">Restauration et traiteurs</option>
                        <option value="22">Santé, Médecine, Récréation et Loisirs</option>
                        <option value="24">Services de transport, Logistique et Courrier</option>
                        <option value="25">Services et Equipement de Technologies de l'Information</option>
                        <option value="26">Services et Equipements de Télécommunications</option>
                        <option value="23">Services financiers et légaux</option>
                        <option value="27">Services ménagers et industriels</option>
                        <option value="28">Voyage, Logement et Location</option>
                    </select>
                </div>
                <div class="col-md-12">
                    <label for="" class="form-label">Objet de l’appel d’offres ou de la consultation<span class=" text-danger">*</span>:</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="2"></textarea>
                    <span class=" text-danger">Choisir un objet pour l’appel d’offres qui attirera l’attention des entreprises <br>
                            Ex: Acquisition et Installation des mobiliers pour 20 écoles à Jacmel
                    </span>
                </div>
                <div class="col-md-6 ">
                    <label for="" class="form-label">Numero:</label>
                    <input type="text" class="form-control" id="" placeholder="">
                </div>
                <div class="col-md-6 ">
                    <label for="" class="form-label">Prêt:</label>
                    <input type="text" class="form-control" id="" placeholder="">
                </div>
                <div class="col-md-12">
                    <label for="" class="form-label">Pays d’execution :<span class=" text-danger">*</span> :</label>
                    <select id="inputState" class="form-select">
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
                                    <option value="60">Côte d’Ivoire</option>
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
                <div class="col-md-6">
                    <label for="" class="form-label">Zone(s) d’execution<span class=" text-danger">*</span>:</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="2"></textarea>
                </div>
                <div class="col-md-6">
                    <label for="" class="form-label">Introduction:</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="2"></textarea>
                </div>
                <div class="col-md-6">
                    <label for="" class="form-label">Description de taches<span class=" text-danger">*</span>:</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="2"></textarea>
                </div>
                <div class="col-md-6">
                    <label for="" class="form-label">Profil du consultant ou des consultants ou de la firme<span class=" text-danger">*</span>:</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="2"></textarea>
                </div>
                <div class="col-md-6 ">
                    <label for="" class="form-label">Coût du dossier:</label>
                    <input type="text" class="form-control" id="" placeholder="Indiquer montant en chiffres. Laisser vide si c’est gratuit. Les 3 autres champs ne s'afficheront, coté public">
                    <select id="inputState" class="form-select">
                        <option value="USD">USD</option>
                        <option value="HTG" selected="selected">HTG</option>
                        <option value="Euro">Euro</option>
                        <option value="Peso">Peso</option>
                    </select>
                </div>
                <div class="col-md-6 ">
                    <label for="" class="form-label">Payable par:</label>
                    <select id="inputState" class="form-select">
                        <option value="cd">Chèque de direction</option>
                        <option value="cc">Chèque certifié</option>
                        <option value="cdcc">Chèque de direction ou Chèque certifié</option>
                        <option value="csh">Espèces</option>
                        <option value="vb">Virement bancaire</option>
                        <option value="cb">Carte bancaire</option>
                    </select>
                </div>
                <div class="col-md-12">
                    <label for="" class="form-label">Payé à:</label>
                    <input class="form-control" id="" placeholder=""></input>
                </div>
                <div class="col-md-12">
                    <label for="" class="form-label">Envoyer le pli à<span class=" text-danger">*</span>:</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="2"></textarea>
                </div>
                <div class="col-md-12">
                    <label for="formFile" class="form-label">Fichier<span class=" text-danger">*</span>:</label>
                    <input class="form-control" type="file" id="formFile">
                    <p>
                        <span class=" text-danger">Vous pouvez désormais télécharger le dossier complet d’appel d’offres. <br>
                        A chaque modification, il faut re-télécharger le fichier.</span> <br>
                        Seuls les fichiers de taille <span class=" text-danger">8MB max</span> et de format: <span class=" text-danger">.rar, .zip, .pdf, doc, .docx, .jpg, .jpeg, .png</span> sont acceptés.
                    </p>
                </div>
                <div class="col-md-6">
                    <label for="" class="form-label">D’autres informations de contact:</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="2"></textarea>
                </div>
                <div class="col-md-6">
                    <label for="" class="form-label">Autres remarques:</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="2"></textarea>
                </div>
                <div class="col-md-6">
                    <label for="" class="form-label">Date Limite<span class=" text-danger">*</span> :</label>
                    <div class="d-flex">
                        <div class="">
                            <label for="" class="form-label">Jour</label>
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
                            <label for="" class="form-label">Mois</label>
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
                            <label for="" class="form-label">Année</label>
                            <input type="text" class="form-control" id="" placeholder="Année">
                        </div>

                        <div class="">
                            <label for="" class="form-label">Heure</label>
                            <select id="inputState" class="form-select">
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
                                <option value="22">22</option>
                                <option value="23">23</option>
                                <option value="24">24</option>
                            </select>
                        </div>

                        <div class="">
                            <label for="" class="form-label">Minute</label>
                            <select id="inputState" class="form-select">
                                <option value="0">00</option>
                                <option value="1">15</option>
                                <option value="2">30</option>
                                <option value="3">45</option>
                            </select>
                        </div>

                    </div>
                    
                </div>

                <div class="col-md-6">
                    <label for="" class="form-label">Ouverture de Pli: 
                        <label class="form-check-label" for="flexCheckDefault">
                        Aucune date d'ouverture
                        </label>
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    </label>
                    <div class="d-flex">
                        <div class="">
                            <label for="" class="form-label">Jour</label>
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
                            <label for="" class="form-label">Mois</label>
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
                            <label for="" class="form-label">Année</label>
                            <input type="text" class="form-control" id="" placeholder="Année">
                        </div>

                        <div class="">
                            <label for="" class="form-label">Heure</label>
                            <select id="inputState" class="form-select">
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
                                <option value="22">22</option>
                                <option value="23">23</option>
                                <option value="24">24</option>
                            </select>
                        </div>

                        <div class="">
                            <label for="" class="form-label">Minute</label>
                            <select id="inputState" class="form-select">
                                <option value="0">00</option>
                                <option value="1">15</option>
                                <option value="2">30</option>
                                <option value="3">45</option>
                            </select>
                        </div>

                    </div>
                    
                </div>

                <div  class="  ">
                En cliquant ci-dessous, je déclare avoir lu et accepté les <a class=" text-danger" href="https://www.jobpaw.com/assets/pdf/JobPaw-Publicite.pdf"> coûts et avantages de publication des consultations et appels d’offres téléchargeables ici.</a>
                </div>
                <div  class="  ">
                    Une facture vous sera envoyée par e-mail avec des instructions pour le <span class=" text-danger">paiement par carte bancaire ou par virement bancaire.</span>
                </div>
                
                
                <div class="col-12">
                    <button type="submit" class="btn btn-primary">Poster Appel d’offres</button>
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

    <script src="../../scripts/entreprisesPrivate.js"></script>
    <!-- template js -->
    <script src="../../assets/js/hiredots.js"></script>
    
</body>

</html>