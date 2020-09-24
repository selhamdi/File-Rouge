<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.js"></script>
    <link rel="stylesheet" href="../css/cantact.css">
    <!-- <link rel="stylesheet" href="../css/recipe.css"> -->
    <link rel="stylesheet" href="../css/search.css">
    <link rel="stylesheet" href="../css/patisiere.css">

</head>

<body>
    <header class="header-home">
        <nav class="navbar navbar-inverse nav-home ">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#"><img class="logo" src="../images/logo.png"> </a>
                </div>

                <div class="collapse navbar-collapse " id="myNavbar">
                    <ul class="nav navbar-nav menu">
                        <li><a class="text-white" href="#">Accueil</a></li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Catégories <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Cuisine</a></li>
                                <li><a href="#">Pâtisserie</a></li>
                                <li><a href="#">Dessert</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Pages <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#" class="drop">Comment ça marche</a></li>
                                <li><a href="#">Qui sommes nous?</a></li>
                            </ul>
                        </li>
                        <li><a href="#"><i class="fa fa-search" class="openBtn" onclick="openSearch()"> </i></a></li>
                        <div id="myOverlay" class="overlay">
                            <span class="closebtn" onclick="closeSearch()" title="Close Overlay">×</span>
                            <div class="overlay-content">
                                <form action="/action_page.php">
                                    <input type="text" placeholder="Search.." name="search">
                                    <button type="submit"><i class="fa fa-search"></i></button>
                                </form>
                            </div>
                        </div>
                        <li><a href="login.php"><i class="fa fa-user-plus"></i></a></li>
                        <li><a href="#"><i class="fa fa-shopping-basket"></i></a></li>

                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><button class="nvrecette"><strong>Ajouter une recette</strong></button></li>
                    </ul>
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                    <h1 class="H1">Catégories : Cuisine
                    </h1>
                    <ol class="breadcrumb text-center">
                        <li><a href="../php/menu-home.php">Accueil</a></li>
                        <li class="active">Cuisine
                        </li>
                    </ol>
                </div>
            </div>
            </div>
        </nav>
    </header>

    <div class="ensemble-input-button">
        <div id="fields2">
            <p>Il est parfois difficile de trouver un plat qui plaira à tout le monde. Alors GOURMAND a sélectionné pour vous des plats originaux, traditionnels et surtout gourmands. Il y en aura pour tous les goûts. Alors n'attendez plus pour trouver la recette qui fera votre bonheur et celui de vos invités.</p>
        </div>
        <div class="row">
            <form id="add-new-listing" method="POST">
                <div class="form-group">
                    <input type="text" value="" placeholder="Your Recipe Title">
                    <select name="pets" id="pet-select">
                        <option value="" style="text-align: center;">---Catégorie de recette---</option>
                        <option value="dog">Dog</option>
                        <option value="cat">Cat</option>
                        <option value="hamster">Hamster</option>
                        <option value="parrot">Parrot</option>
                        <option value="spider">Spider</option>
                        <option value="goldfish">Goldfish</option>
                    </select>
                    <button>Recherche</button>
                </div>
                <div class="container my-5">
                    <div class="row row-eq-height">
                        <div class="col-12 col-md-6 col-lg-4 col-xl-3 mb-5">
                            <div class="product-card h-100 mb-0">
                                <a class="product-card__content" href="#">
                                    <span class="product-card__img" style='background-image:url(https://img.cuisineaz.com/660x660/2020-08-05/i154764-pates-au-ragout.jpeg)'></span>
                                    <span class="product-card__title">
                                        Pâtes au ragù blanc de canard de Luana Belmondo
                                    </span>
                                    <span class="product-card__price">
                                        $49.99
                                    </span>
                                </a>
                                <div class="product-card__actions">
                                    <a class="product-card__btn mr-3" href="#">
                                        <i class="fas fa-plus mr-2"></i>
                                        Ajouter au panier
                                    </a>
                                    <!-- <a class="product-card__icon-btn" href="#">
                                        <i class="fas fa-heart"></i>
                                    </a> -->
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-md-6 col-lg-4 col-xl-3 mb-5">
                            <div class="product-card h-100 mb-0">
                                <a class="product-card__content" href="#">
                                    <span class="product-card__img" style='background-image:url(https://img.cuisineaz.com/660x660/2013-12-20/i4945-spaghetti-alle-vongole-spaghettis-aux-palourdes.jpg)'></span>
                                    <span class="product-card__title">
                                        Spaghetti Alle Vongole
                                    </span>
                                    <span class="product-card__price">
                                        $24.99
                                    </span>
                                </a>
                                <div class="product-card__actions">
                                    <a class="product-card__btn mr-3" href="#">
                                        <i class="fas fa-plus mr-2"></i>
                                        Ajouter au panier
                                    </a>
                                    <!-- <a class="product-card__icon-btn" href="#">
                                        <i class="fas fa-heart"></i>
                                    </a> -->
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4 col-xl-3 mb-5">
                            <div class="product-card h-100 mb-0">
                                <a class="product-card__content" href="#">
                                    <span class="product-card__img" style='background-image:url(https://img.cuisineaz.com/660x660/2019-03-14/i146053-burger-saint-agur.jpeg)'></span>
                                    <span class="product-card__title">
                                        Hamburger au Saint Agur </span>
                                    <span class="product-card__price">
                                        $19.99
                                    </span>
                                </a>
                                <div class="product-card__actions">
                                    <a class="product-card__btn mr-3" href="#">
                                        <i class="fas fa-plus mr-2"></i>
                                        Ajouter au panier </a>
                                    <!-- <a class="product-card__icon-btn" href="#">
                                        <i class="fas fa-heart"></i>
                                    </a> -->
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-md-6 col-lg-4 col-xl-3 mb-5">
                            <div class="product-card h-100 mb-0">
                                <a class="product-card__content" href="#">
                                    <span class="product-card__img" style='background-image:url(https://img.cuisineaz.com/660x660/2019-11-18/i150991-magret-de-canard-aux-pommes-et-au-cidre.jpeg)'></span>
                                    <span class="product-card__title">
                                        Magret de canard aux pommes et au cidre
                                    </span>
                                    <span class="product-card__price">
                                        $49.99
                                    </span>
                                </a>
                                <div class="product-card__actions">
                                    <a class="product-card__btn mr-3" href="#">
                                        <i class="fas fa-plus mr-2"></i>
                                        Ajouter au panier </a>
                                    <!-- <a class="product-card__icon-btn" href="#">
                                        <i class="fas fa-heart"></i>
                                    </a> -->
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4 col-xl-3 mb-5">
                            <div class="product-card h-100 mb-0">
                                <a class="product-card__content" href="#">
                                    <span class="product-card__img" style='background-image:url(https://img.cuisineaz.com/660x660/2018-04-25/i139827-.jpeg)'></span>
                                    <span class="product-card__title">
                                        Pain de burger
                                    </span>
                                    <span class="product-card__price">
                                        $49.99
                                    </span>
                                </a>
                                <div class="product-card__actions">
                                    <a class="product-card__btn mr-3" href="#">
                                        <i class="fas fa-plus mr-2"></i>
                                        Ajouter au panier </a>
                                    <!-- <a class="product-card__icon-btn" href="#">
                                        <i class="fas fa-heart"></i>
                                    </a> -->
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4 col-xl-3 mb-5">
                            <div class="product-card h-100 mb-0">
                                <a class="product-card__content" href="#">
                                    <span class="product-card__img" style='background-image:url(https://img.cuisineaz.com/660x660/2016-10-27/i32507-coquilles-st-jacques-a-la-bretonne.jpg)'></span>
                                    <span class="product-card__title">
                                        Coquilles st jacques à la bretonne
                                    </span>
                                    <span class="product-card__price">
                                        $45.00
                                    </span>
                                </a>
                                <div class="product-card__actions">
                                    <a class="product-card__btn mr-3" href="#">
                                        <i class="fas fa-plus mr-2"></i>
                                        Ajouter au panier </a>
                                    <!-- <a class="product-card__icon-btn" href="#">
                                        <i class="fas fa-heart"></i>
                                    </a> -->
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4 col-xl-3 mb-5">
                            <div class="product-card h-100 mb-0">
                                <a class="product-card__content" href="#">
                                    <span class="product-card__img" style='background-image:url(https://img.cuisineaz.com/660x660/2019-11-04/i150644-gambas-au-barbecue-flambees-au-whisky.jpeg)'></span>
                                    <span class="product-card__title">
                                        Gambas au barbecue flambées au whisky </span>
                                    <span class="product-card__price">
                                        $49.99
                                    </span>
                                </a>
                                <div class="product-card__actions">
                                    <a class="product-card__btn mr-3" href="#">
                                        <i class="fas fa-plus mr-2"></i>
                                        Ajouter au panier </a>
                                    <!-- <a class="product-card__icon-btn" href="#">
                                        <i class="fas fa-heart"></i>
                                    </a> -->
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4 col-xl-3 mb-5">
                            <div class="product-card h-100 mb-0">
                                <a class="product-card__content" href="#">
                                    <span class="product-card__img" style='background-image:url(https://img.cuisineaz.com/660x660/2019-02-21/i145968-l-assiette-de-fruits-de-mer-de-florian-service-2.jpeg)'></span>
                                    <span class="product-card__title">
                                        L'assiette de fruits de mer </span>
                                    <span class="product-card__price">
                                        $49.99
                                    </span>
                                </a>
                                <div class="product-card__actions">
                                    <a class="product-card__btn mr-3" href="#">
                                        <i class="fas fa-plus mr-2"></i>
                                        Ajouter au panier </a>
                                    <!-- <a class="product-card__icon-btn" href="#">
                                        <i class="fas fa-heart"></i>
                                    </a> -->
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4 col-xl-3 mb-5">
                            <div class="product-card h-100 mb-0">
                                <a class="product-card__content" href="#">
                                    <span class="product-card__img" style='background-image:url(https://img.cuisineaz.com/660x660/2016-04-28/i46954-calmar-poeles-a-l-ail-et-au-persil.jpg)'></span>
                                    <span class="product-card__title">
                                        Calmar poélés à l'ail et au persil </span>
                                    <span class="product-card__price">
                                        $49.99
                                    </span>
                                </a>
                                <div class="product-card__actions">
                                    <a class="product-card__btn mr-3" href="#">
                                        <i class="fas fa-plus mr-2"></i>
                                        Ajouter au panier </a>
                                    <!-- <a class="product-card__icon-btn" href="#">
                                        <i class="fas fa-heart"></i>
                                    </a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="button-bar">
                    <a href="#" class="button prev">Previous</a>
                    <a href="#" class="button next">Next</a>
                </div>
                <footer>
                    <!-- FOOTER TOP -->
                    <div class="row footer-top">
                        <div class="container">
                            <div class="row" class="row">
                                <div class="col-md-12 footer-row-1">
                                    <div class="row" class="row">
                                        <div class="col-md-12 sidebar-1">
                                            <aside id="text-3" class="widget vc_column_vc_container widget_text">
                                                <div class="textwidget">
                                                    <h2 class="recipe-finder__heading fc-white" style="color: #fff; margin-bottom: 20px; text-align: center; font-size: 35px; line-height: 39px;">
                                                        Search for Recipes</h2>
                                                </div>
                                            </aside>
                                            <aside id="custom_html-3" class="widget_text widget vc_column_vc_container widget_custom_html">
                                                <div class="textwidget custom-html-widget">
                                                    <div class="mt-car-search wow fadeInUp mtsearchform-style-v2 ">
                                                        <div class="foodhub-header-searchform">
                                                            <form method="GET" action="https://foodhub.modeltheme.com/" autocomplete="off">
                                                                <input type="hidden" name="post_type" value="mt_listing" />
                                                                <div class="row">

                                                                    <div class="recherche">
                                                                        <input type="text" name="motcle" value="Mot clé">
                                                                        <select>
                                                                            <option value="#">Catégorie</option>
                                                                            <option value="#">Cuisine</option>
                                                                            <option value="#">Pâtisserie</option>
                                                                            <option value="#">Déssert</option>
                                                                        </select>
                                                                        <button class="btn-s"><i class="fa fa-search"></i></button>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                            <!-- <div id="datafetch"></div>
                        </div></div></div></aside></div></div></div></div> 
                              </div> -->
                                                        </div>
                </footer>
</body>

</html>