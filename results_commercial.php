<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">

    <title>Rousseau 5 - For sell</title>
    <meta name="description" content="The HTML5 Herald">
    <meta name="author" content="SitePoint">

    <link rel="stylesheet" href="css/libraries/bootstrap.css">
    <link rel="stylesheet" href="css/libraries/bootstrap-multiselect.css">
    <link rel="stylesheet" href="css/libraries/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/custom_icons/style.css">
    <link rel="stylesheet" href="css/libraries/flickity_carousel.css">
    <link rel="stylesheet" href="css/libraries/simplebar.css">
    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/results.css">
    <link rel="stylesheet" href="css/media_queries.css">

    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
    <![endif]-->
    <!--<script async defer src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap"></script>-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBy3z5ZYvr8P0eXpKg8QhcqZU6yYg4Nl6k&libraries=drawing,places&language=en"></script>

</head>

<body>

<header>
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-3">
                <select class="selectpicker" name="" id="languages">
                    <option value="en">English</option>
                    <option value="fr">France</option>
                    <option value="de">Deutch</option>
                </select>
            </div>
            <div class="col-xs-6">
                <div class="logo_container">
                    <a href="index.php">
                        <img src="img/logo_transparent.svg" alt="Rousseau5 logo">
                    </a>
                </div>
            </div>
            <div class="col-xs-3">
                <div class="contact_info_container">
                    <a href="tel:+41 22 732 8000">+41 22 732 8000</a>
                    <a href="mailto:info@rousseau5.ch">info@rousseau5.ch</a>
                </div>
            </div>
        </div>
    </div>
</header>

<nav class='navbar'>
    <div class="container-fluid">
        <button><span class="hamburger"></span></button>
        <ul class='nav visible-links'>
            <li class="nav-item"><a class="nav-link" href='index.php'>Accueil</a></li>
            <li class="nav-item"><a class="nav-link" href='results_for_sale.php'>Achat résidentiel</a></li>
            <li class="nav-item"><a class="nav-link" href='#'>Location résidentiel</a></li>
            <li class="nav-item"><a class="nav-link" href='results_promotions.php'>Projets neufs</a></li>
            <li class="nav-item active"><a class="nav-link" href='commercial.php'>Locaux commerciaux</a></li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">L’agence</a>
                <div class="dropdown-menu" aria-labelledby="Preview">
                    <a class="dropdown-item" href="#">Philisophie & competence</a>
                    <a class="dropdown-item" href="press_list.php">Revue de presse</a>
                    <a class="dropdown-item" href="team.php">L’equipe</a>
                </div>
            </li>
            <li class="nav-item"><a class="nav-link" href='#'>Nous contacter</a></li>
        </ul>
        <ul class='nav hidden-links hidden'></ul>
    </div>
</nav>

<main id="results_comercial">
    <section class="search_section">
        <div class="container-fluid">
            <div class="search_block">
                <div class="row">
                    <div class="col-xs-12 col-sm-2 margin_bottom_10">
                        <label for="object_type_select" class="form_el_label light"><i class="icn icon-building"></i><span>Type de bien</span></label>
                        <select class="selectpicker" name="object_type" id="object_type_select">
                            <option value="">Tout</option>
                            <option value="">House</option>
                            <option value="">Apartment</option>
                            <option value="">Building plot</option>
                            <option value="">Building</option>
                            <option value="">Parking space</option>
                        </select>
                    </div>
                    <div class="col-xs-12 col-sm-2 margin_bottom_10">
                        <label class="form_el_label light"><i class="icn icon-building2"></i><span>Sous-categorie</span></label>
                        <select class="selectpicker" name="object_subtype">
                            <option value="">Tout</option>
                            <option value="">Bastide</option>
                            <option value="">Bungalow</option>
                            <option value="">Chalet</option>
                        </select>
                    </div>
                    <div class="col-xs-12 col-sm-2 margin_bottom_10">
                        <label class="form_el_label light"><i class="icn icon-country"></i><span>Lieu</span></label>
                        <select class="selectpicker" name="object_place">
                            <option value="">Tout</option>
                            <option value="">Geneva</option>
                            <option value="">Bern</option>
                            <option value="">Zurich</option>
                            <option value="">Paris</option>
                        </select>
                    </div>
                    <div class="col-xs-12 col-sm-2 margin_bottom_10">
                        <label class="form_el_label light"><i class="icn icon-projects_neufs"></i><span>Projects neufs</span></label>
                        <div class="min_select_container margin_bottom_10">
                            <select class="selectpicker" name="object_rooms_number">
                                <option value="">1</option>
                                <option value="">2</option>
                                <option value="">3</option>
                                <option value="">4</option>
                                <option value="">5</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-2 margin_bottom_10">
                        <label class="form_el_label light"><i class="icn icon-rooms"></i><span>Pieces</span></label>
                        <div class="min_select_container margin_bottom_10">
                            <select class="selectpicker" name="object_surface">
                                <option value="">1</option>
                                <option value="">2</option>
                                <option value="">3</option>
                                <option value="">4</option>
                                <option value="">5</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-2 margin_bottom_10">
                        <label class="form_el_label light"><i class="icn icon-bedrooms"></i><span>Chambres</span></label>
                        <div class="min_select_container margin_bottom_10">
                            <select class="selectpicker" name="object_price">
                                <option value="">1</option>
                                <option value="">2</option>
                                <option value="">3</option>
                                <option value="">4</option>
                                <option value="">5</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-2 margin_bottom_10">
                        <label class="form_el_label light"><i class="icn icon-living_area"></i><span>Surface habit.</span></label>
                        <div class="min_select_container margin_bottom_10">
                            <select class="selectpicker" name="object_rooms_number">
                                <option value="">100</option>
                                <option value="">200</option>
                                <option value="">300</option>
                                <option value="">400</option>
                                <option value="">500+</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-3 margin_bottom_10">
                        <label class="form_el_label light"><i class="icn icon-prix"></i><span>Prix min</span></label>
                        <div class="input_container light">
                            <input type="text" placeholder="Min">
                            <div class="input_label">CHF</div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-3 margin_bottom_10">
                        <label class="form_el_label light"><i class="icn icon-prix"></i><span>Prix max</span></label>
                        <div class="input_container light">
                            <input type="text" placeholder="Max">
                            <div class="input_label">CHF</div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4 margin_bottom_10 margin_top_30">
                        <div class="input_container light">
                            <input type="text" placeholder="Rechercher votre bien">
                            <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="results_section">
        <div class="container-fluid">
            <h1 class="margin_bottom_30">Votre recherche immobiliére</h1>
            <div class="row">
                <div class="col-xs-6">
                    <div class="view_type_container">
                        <ul class="view_type">
                            <li class="list_view_btn active"><i class="icn icon-list_icn"></i>Liste (371)</li>
                            <li class="grid_view_btn"><i class="icn icon-image_icn"></i>Grille (371)</li>
                            <li class="map_view_btn"><i class="icn icon-map_icn"></i>Carte (152)</li>
                        </ul>
                    </div>
                </div>
                <div class="col-xs-3 offset-xs-3">
                    <select class="selectpicker" name="sorting_type">
                        <option value="">Tout</option>
                        <option value="">10 résultats par page</option>
                        <option value="">50 résultats par page</option>
                        <option value="">100 résultats par page</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="results_container list_view">
            <div id="results_map"></div>
            <div class="container-fluid">
                <div class="carousel row">
                    <div class="carousel-cell col-xs-12 col-sm-6 col-lg-4 object_block_container">
                        <div class="object_block">
                            <div class="img_block">
                                <div class="activity_label">Loué</div>
                                <div class="exclusive_label">Exclusif</div>
                                <img src="img/object1.jpg" alt="object name">
                            </div>
                            <div class="info_block">
                                <div class="title_container">
                                    <a href="details_commercial.php"><h2>La Residence du lac - Saint Prex</h2></a>
                                    <ul class="social_networks">
                                        <li><a href="#"><i class="icn icon-tw"></i></a></li>
                                        <li><a href="#"><i class="icn icon-linked_in"></i></a></li>
                                        <li><a href="#"><i class="icn icon-fb"></i></a></li>
                                    </ul>
                                </div>
                                <div class="description_container">
                                    <h3>Local commercial / <span>Vandoevres</span></h3>
                                    <p class="object_description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                    <a href="#" class="btn dark">Contactez l'agent</a>
                                    <div class="object_price">CHF 2'990'000</div>
                                </div>
                                <div class="properties_containner">
                                    <ul class="properties">
                                        <li class="hidden"><i class="icn icon-bedrooms"></i><span class="prop_title">Etat</span><span class="prop_val">Neuf</span></li>
                                        <li><i class="icn icon-living_area"></i><span class="prop_title">Surface habitable</span><span class="prop_val">200m<sup>2</sup></span></li>
                                        <li><i class="icn icon-bathrooms"></i><span class="prop_title">Terrase</span><span class="prop_val">120m<sup>2</sup></span></li>
                                        <li><i class="icn icon-prix"></i><span class="prop_title">Loyer</span><span class="prop_val">1200 CHF</span></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="gradient_bg"></div>
                        </div>
                    </div>
                </div>
            </div>
            <nav>
                <ul class="pagination">
                    <li class="page-item">
                        <a href="#" class="page-link" aria-label="Previous">
                            <span aria-hidden="true">«</span>
                        </a>
                    </li>
                    <li class="page-item"><a href="#" class="page-link">1</a></li>
                    <li class="page-item"><a href="#" class="page-link">2</a></li>
                    <li class="page-item"><a href="#" class="page-link">3</a></li>
                    <li class="page-item active"><a href="#" class="page-link">4</a></li>
                    <li class="page-item"><a href="#" class="page-link">5</a></li>
                    <li class="page-item"><a href="#" class="page-link">6</a></li>
                    <li class="page-item"><a href="#" class="page-link">7</a></li>
                    <li class="page-item">
                        <a href="#" class="page-link" aria-label="Next">
                            <span aria-hidden="true">»</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </section>
</main>

<footer>
    <section class="footer_top_section">
        <div class="container-fluid">
            <h1>ROUSSEAU N°5 L'AGENCE IMMOBILIERE</h1>
            <div class="row">
                <div class="col-xs-2">
                    <ul class="footer_links_list">
                        <li><a href="#">Gent immobilier de luxe Genève</a></li>
                        <li><a href="#">Immobilier de luxe Genève</a></li>
                        <li><a href="#">Appartement à vendre Genève</a></li>
                        <li><a href="#">Villa à vendre Genève</a></li>
                        <li><a href="#">Villa à vendre Cologny</a></li>
                    </ul>
                </div>
                <div class="col-xs-2">
                    <ul class="footer_links_list">
                        <li><a href="#">Villa à vendre Colonge Bellerive</a></li>
                        <li><a href="#">Villa à vendre Corsier</a></li>
                        <li><a href="#">Villa à vendre Anières</a></li>
                        <li><a href="#">Villa à vendre Vandoeuvres</a></li>
                        <li><a href="#">Propriété à vendre Colonge Bellerive</a></li>
                    </ul>
                </div>
                <div class="col-xs-2">
                    <ul class="footer_links_list">
                        <li><a href="#">Propriété à vendre Cologny</a></li>
                        <li><a href="#">Propriété à vendre Corsier</a></li>
                        <li><a href="#">Propriété à vendre Anières</a></li>
                        <li><a href="#">Propriété à vendre Vandoeuvres</a></li>
                        <li><a href="#">Maison à vendre Genève</a></li>
                    </ul>
                </div>
                <div class="col-xs-2">
                    <ul class="footer_links_list">
                        <li><a href="#">Villa de luxe à vendre Genève</a></li>
                        <li><a href="#">Appartements à vendre à Genève</a></li>
                        <li><a href="#">Maisons et villas à vendre à Genève</a></li>
                        <li><a href="#">Appartement à louer Genève</a></li>
                        <li><a href="#">Appartement à louer Vaud</a></li>
                    </ul>
                </div>
                <div class="col-xs-2">
                    <ul class="footer_links_list">
                        <li><a href="#">Appartement à louer Valais</a></li>
                        <li><a href="#">Appartement à vendre Vaud</a></li>
                        <li><a href="#">Appartement à vendre Valais</a></li>
                        <li><a href="#">Maison à vendre Genève</a></li>
                        <li><a href="#">Maison à vendre Vaud</a></li>
                    </ul>
                </div>
                <div class="col-xs-2">
                    <ul class="footer_links_list">
                        <li><a href="#">Chalet terrain Genève Valais</a></li>
                        <li><a href="#">Immobilier de prestige Genève</a></li>
                        <li><a href="#">Immobilier Genève</a></li>
                        <li><a href="#">Immobilier Vaud</a></li>
                        <li><a href="#">Immobilier Valais</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="footer_bottom_section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-2">
                    <ul class="footer_links_list">
                        <li><a href="#">Arcade à transmettre</a></li>
                        <li><a href="#">Bontique à transmettre</a></li>
                        <li><a href="#">Bureau à louer</a></li>
                        <li><a href="#">Tea-Room à transmettre</a></li>
                        <li><a href="#">Institut Beauté à transmettre</a></li>
                        <li><a href="#">Cabaret à transmettre</a></li>
                        <li><a href="#">Wellness à transmettre</a></li>
                    </ul>
                </div>
                <div class="col-xs-2">
                    <ul class="footer_links_list">
                        <li><a href="#">Bureau à vendre</a></li>
                        <li><a href="#">Garage à vendre</a></li>
                        <li><a href="#">Bâtiment mixte à vendre</a></li>
                        <li><a href="#">Divers à transmettre</a></li>
                        <li><a href="#">Immeuble à louer</a></li>
                        <li><a href="#">Bar à transmettre</a></li>
                        <li><a href="#">Entreprise à transmettre</a></li>
                    </ul>
                </div>
                <div class="col-xs-2">
                    <ul class="footer_links_list">
                        <li><a href="#">Arcade à transmettre</a></li>
                        <li><a href="#">Bontique à transmettre</a></li>
                        <li><a href="#">Bureau à louer</a></li>
                        <li><a href="#">Tea-Room à transmettre</a></li>
                        <li><a href="#">Institut Beauté à transmettre</a></li>
                        <li><a href="#">Cabaret à transmettre</a></li>
                        <li><a href="#">Wellness à transmettre</a></li>
                    </ul>
                </div>
                <div class="col-xs-2">
                    <ul class="footer_links_list">
                        <li><a href="#">Bureau à vendre</a></li>
                        <li><a href="#">Garage à vendre</a></li>
                        <li><a href="#">Bâtiment mixte à vendre</a></li>
                        <li><a href="#">Divers à transmettre</a></li>
                        <li><a href="#">Immeuble à louer</a></li>
                        <li><a href="#">Bar à transmettre</a></li>
                        <li><a href="#">Entreprise à transmettre</a></li>
                    </ul>
                </div>
                <div class="col-xs-4">
                    <ul class="address_block">
                        <li><a href="tel:+41 00 732 80 00"><i class="fa fa-phone" aria-hidden="true"></i><span>+41 00 732 80 00</span></a></li>
                        <li><a href="tel:+41 76 386 61 85"><i class="fa fa-mobile" aria-hidden="true"></i><span>+41 76 386 61 85</span></a></li>
                        <li><i class="fa fa-map-marker" aria-hidden="true"></i><span>Rue Rousseau 5 - 1201 Genève</span></li>
                        <li><a href="mailto:mb@rousseau5.ch"><i class="fa fa-envelope" aria-hidden="true"></i><span>mb@rousseau5.ch</span></a></li>
                    </ul>
                    <div class="input_container light">
                        <input type="text" placeholder="Inscrivez-vous à notre newsletter">
                        <button type="submit"><i class="fa fa-paper-plane" aria-hidden="true"></i></button>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <p class="margin_top_30">Achat/vente immobilier de prestige suisse : genève, vaud, lac léman, genève centre, valais, genève centre rive droite, genève centre rive gauche, genève rive droite, crans-montana, saint-prex, rhône-arve, vaud la côte.</p>
                    <p class="margin_top_15">Achat/location de biens immobiliers de prestige à vendre en suisse : vente appartements de lux suisse, maison en vente de luxe suisse, vente chalets de luxe suisse, vente propriété suisse, vente villas de luxe suisse, vente terrain suisse, vente derniers étages suisse, vente attique suisse. Location biens immobiliers de prestige à louer en Suisse, location appartement, location villas, location maison, relocation, Family service.</p>
                    <p class="margin_top_15">Agence immobilière de prestige en Suisse, agence immobilière Genève GE, agence immobilière Morges, agence immobilière Crans-Montana, Agence immoiblière Vaud. Service immobiliers en suisse, service immoiblier sur mesure, service immoibliers de prestige en suisse, achat/vente immobilier de luxe en Suisse, location immobilier en Suisse, location immobilier Genève, relocation immobilier Genève, Family service Genève.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 margin_top_30">
                    <p class="copyright">© 2016 - Rousseau n°5 - L’agence immobilière Création et développement par voodoo studio</p>
                </div>
            </div>
        </div>
        <ul class="social_networks">
            <li class="twitter"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
            <li class="linkedin"><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
            <li class="facebook"><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
            <li class="scroll_to_top"><a href="#"><i class="fa fa-arrow-up" aria-hidden="true"></i></a></li>
        </ul>
    </section>
</footer>

<script src="js/libraries/jquery-3.1.1.min.js"></script>
<script src="js/libraries/jquery-ui.min.js"></script>
<script src="js/libraries/bootstrap.min.js"></script>
<script src="js/libraries/bootstrap-multiselect.js"></script>
<script src="js/libraries/flickity_carousel.min.js"></script>
<script src="js/libraries/simplebar.js"></script>

<script src="js/functions.js"></script>
<script src="js/events.js"></script>
<script src="js/results.js"></script>
</body>
</html>