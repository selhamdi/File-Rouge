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
                    <h1 class="H1">Catégories : Desserts
                    </h1>
                    <ol class="breadcrumb text-center">
                        <li><a href="../php/menu-home.php">Accueil</a></li>
                        <li class="active">Desserts
                        </li>
                    </ol>
                </div>
            </div>
            </div>
        </nav>
    </header>

    <div class="ensemble-input-button">
        <div id="fields2">
            <p>Chez nous le dessert c'est sacré ! Parce que rien de tel après un bon repas de terminer sur une note sucrée. Vous êtes en manque d'inspiration ou envie de nouveauté ? À la rechercher d'un dessert facile ou élaboré ? Classique ou original ? Gâteau, tarte, crème, charlotte, crumble, petits gâteaux (financiers, madeleines...), nous avons sélectionné les meilleures recettes de desserts simples et rapides à réaliser pour terminer vos repas en beauté ! On craque pour la tarte de fruits ! Croustillante, caramélisée, avec une crème pâtissière, une compotée de fruits, une meringue... ce dessert gourmand et fruité est un incontournable ! Tarte alsacienne aux pommes et son appareil vanillé, tarte citron meringuée pour une note acidulée, mais aussi tarte aux fraises simple pour un repas au soleil, fondez pour les fruits de saison ! Nos recettes de crèmes faites maison accompagneront à merveilles tartes, gâteaux, ou salades de fruits : crème anglaise, crème pâtissière, crème chantilly, les bases de pâtisserie n'auront plus de secrets pour vous. Les grands gourmands craqueront pour le tiramisu à l'italienne, le cheesecake ou le kouign aman aux pommes et toutes les recettes de spécialités étrangères, de l'Italie au Mexique en passant par les États-Unis, évadez-vous l'instant d'une bouchée !</p>
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
                                    <span class="product-card__img" style='background-image:url(https://img.cuisineaz.com/660x660/2017-08-03/i131275-tarte-au-citron-au-thermomix.jpeg)'></span>
                                    <span class="product-card__title">
                                    Tarte au citron au Thermomix
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
                                    <span class="product-card__img" style='background-image:url(https://img.cuisineaz.com/660x660/2018-03-18/i136359-tarte-aux-pommes-sans-oeufs-a-ma-facon-facile.jpeg)'></span>
                                    <span class="product-card__title">
                                    Tarte aux pommes sans oeufs à ma façon facile
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
                                    <span class="product-card__img" style='background-image:url(https://img.cuisineaz.com/660x660/2020-07-07/i154491-shutterstock-348208976.jpeg)'></span>
                                    <span class="product-card__title">
                                    Tiramisu au robot pâtissier </span>
                                    <span class="product-card__price">
                                        $19.99
                                    </span>
                                </a>
                                <div class="product-card__actions">
                                    <a class="product-card__btn mr-3" href="#">
                                        <i class="fas fa-plus mr-2"></i>
                                        Ajouter au panier                                     </a>
                                    <!-- <a class="product-card__icon-btn" href="#">
                                        <i class="fas fa-heart"></i>
                                    </a> -->
                                </div>
                            </div>
                        </div>
                    
                        <div class="col-12 col-md-6 col-lg-4 col-xl-3 mb-5">
                            <div class="product-card h-100 mb-0">
                                <a class="product-card__content" href="#">
                                    <span class="product-card__img" style='background-image:url(https://img.cuisineaz.com/660x660/2016-04-28/i100003-tiramisu-au-speculoos.jpg)'></span>
                                    <span class="product-card__title">
                                    Tiramisu au spéculoos
                                    </span>
                                    <span class="product-card__price">
                                        $49.99
                                    </span>
                                </a>
                                <div class="product-card__actions">
                                    <a class="product-card__btn mr-3" href="#">
                                        <i class="fas fa-plus mr-2"></i>
                                        Ajouter au panier                                     </a>
                                    <!-- <a class="product-card__icon-btn" href="#">
                                        <i class="fas fa-heart"></i>
                                    </a> -->
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4 col-xl-3 mb-5">
                            <div class="product-card h-100 mb-0">
                                <a class="product-card__content" href="#">
                                    <span class="product-card__img" style='background-image:url(https://img.cuisineaz.com/660x660/2017-06-22/i130079-tiramisu-aux-fraises-en-verrine.jpeg)'></span>
                                    <span class="product-card__title">
                                    Tiramisu aux fraises en verrine
                                    </span>
                                    <span class="product-card__price">
                                        $49.99
                                    </span>
                                </a>
                                <div class="product-card__actions">
                                    <a class="product-card__btn mr-3" href="#">
                                        <i class="fas fa-plus mr-2"></i>
                                        Ajouter au panier                                     </a>
                                    <!-- <a class="product-card__icon-btn" href="#">
                                        <i class="fas fa-heart"></i>
                                    </a> -->
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4 col-xl-3 mb-5">
                            <div class="product-card h-100 mb-0">
                                <a class="product-card__content" href="#">
                                    <span class="product-card__img" style='background-image:url(https://img.cuisineaz.com/660x660/2015-08-31/i86523-biscuit-petit-prince-fait-maison.jpg)'></span>
                                    <span class="product-card__title">
                                    Biscuit Petit prince fait maison
                                    </span>
                                    <span class="product-card__price">
                                        $45.00
                                    </span>
                                </a>
                                <div class="product-card__actions">
                                    <a class="product-card__btn mr-3" href="#">
                                        <i class="fas fa-plus mr-2"></i>
                                        Ajouter au panier                                     </a>
                                    <!-- <a class="product-card__icon-btn" href="#">
                                        <i class="fas fa-heart"></i>
                                    </a> -->
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4 col-xl-3 mb-5">
                            <div class="product-card h-100 mb-0">
                                <a class="product-card__content" href="#">
                                    <span class="product-card__img" style='background-image:url(https://img.cuisineaz.com/660x660/2017-11-01/i133702-granola-sans-gluten.jpeg)'></span>
                                    <span class="product-card__title">
                                
                                    Granola sans gluten                                  </span>
                                    <span class="product-card__price">
                                        $49.99
                                    </span>
                                </a>
                                <div class="product-card__actions">
                                    <a class="product-card__btn mr-3" href="#">
                                        <i class="fas fa-plus mr-2"></i>
                                        Ajouter au panier                                     </a>
                                    <!-- <a class="product-card__icon-btn" href="#">
                                        <i class="fas fa-heart"></i>
                                    </a> -->
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4 col-xl-3 mb-5">
                            <div class="product-card h-100 mb-0">
                                <a class="product-card__content" href="#">
                                    <span class="product-card__img" style='background-image:url(https://img.cuisineaz.com/660x660/2017-08-15/i131581-glace-italienne-au-thermomix.jpeg)'></span>
                                    <span class="product-card__title">
                                    Glace italienne au Thermomix                                   </span>
                                    <span class="product-card__price">
                                        $49.99
                                    </span>
                                </a>
                                <div class="product-card__actions">
                                    <a class="product-card__btn mr-3" href="#">
                                        <i class="fas fa-plus mr-2"></i>
                                        Ajouter au panier                                     </a>
                                    <!-- <a class="product-card__icon-btn" href="#">
                                        <i class="fas fa-heart"></i>
                                    </a> -->
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4 col-xl-3 mb-5">
                            <div class="product-card h-100 mb-0">
                                <a class="product-card__content" href="#">
                                    <span class="product-card__img" style='background-image:url(https://img.cuisineaz.com/660x660/2018-04-23/i139664-gateau-aux-3-chocolats-au-thermomix.jpeg)'></span>
                                    <span class="product-card__title">
                                    Gâteau 3 chocolats                                  </span>
                                    <span class="product-card__price">
                                        $49.99
                                    </span>
                                </a>
                                <div class="product-card__actions">
                                    <a class="product-card__btn mr-3" href="#">
                                        <i class="fas fa-plus mr-2"></i>
Ajouter au panier                                    </a>
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
                                <h2 class="recipe-finder__heading fc-white"
                                    style="color: #fff; margin-bottom: 20px; text-align: center; font-size: 35px; line-height: 39px;">
                                    Search for Recipes</h2>
                            </div>
                        </aside>
                        <aside id="custom_html-3"
                            class="widget_text widget vc_column_vc_container widget_custom_html">
                            <div class="textwidget custom-html-widget">
                                <div class="mt-car-search wow fadeInUp mtsearchform-style-v2 ">
                                    <div class="foodhub-header-searchform">
                                        <form method="GET" action="https://foodhub.modeltheme.com/"
                                            autocomplete="off">
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