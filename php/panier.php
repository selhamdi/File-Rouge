<!DOCTYPE html>
<html>

<head>
    <title>Gourmands</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/panier.css">
    <link rel="stylesheet" href="../css/search.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.js"></script>
    <style>

    </style>
</head>
<body style="overflow-x: hidden;">
    
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
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Catégories <span
                                class="caret"></span></a>
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
                    <div class="login-html">

<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Se connecter</label>
<input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Inscription</label>
<div class="login-form">
    <div class="sign-in-htm">
        <div class="group">
            <label for="user" class="label">Email</label>
            <input id="user" type="text" class="input">
        </div>
        <div class="group">
            <label for="pass" class="label">Mot De Pass</label>
            <input id="pass" type="password" class="input" data-type="password">
        </div>
        <div class="group">
            <input id="check" type="checkbox" class="check" checked>
            <label for="check"><span class="icon"></span> Keep me Signed in</label>
        </div>
        <div class="group">
            <input type="submit" class="button" value="Sign In">
        </div>
        <div class="hr"></div>
        <div class="foot-lnk">
            <a href="#forgot">Informations de compte oubliées ?</a>
        </div>
    </div>
    <div class="sign-up-htm">
        <div class="group">
            <label for="user" class="label">Username</label>
            <input id="user" type="text" class="input">
        </div>
        <div class="group">
            <label for="pass" class="label">Password</label>
            <input id="pass" type="password" class="input" data-type="password">
        </div>
        <div class="group">
            <label for="pass" class="label">Repeat Password</label>
            <input id="pass" type="password" class="input" data-type="password">
        </div>
        <div class="group">
            <label for="pass" class="label">Email Address</label>
            <input id="pass" type="text" class="input">
        </div>
        <div class="group">
            <input type="submit" class="button" value="Sign Up">
        </div>
        <div class="hr"></div>
        <div class="foot-lnk">
            <label for="tab-1">Already Member?</a>
        </div>
    </div>
</div>
</div>
</div>
</form>
</div >

</section>  
                    <li><a href="#"><i class="fa fa-shopping-basket"></i></a></li>

                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><button class="nvrecette"><strong>Ajouter une recette</strong></button></li>
                </ul>
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                <h1 class="H1">Panier</h1>
                <ol class="breadcrumb text-center">
                    <li><a href="../php/menu-home.php">Accueil</a></li>
                    <li class="active">Panier</li>
                </ol>
            </div>
        </div>
        </div>
    </nav>
</header>
<div class="row">
    <div class="border-top">
    <p>
Votre Panier est actuellement vide</p>
    <i class="far fa-shopping-cart"></i> 
    </div>
    <button class="return-shop"> Retour à la boutique</button>

</div>
<footer>

    <!-- FOOTER TOP -->
    <div class="row footer-top">
        <div class="container">
            <div class="row">
                <div class="col-md-12 footer-row-1">
                    <div class="row">
                        <div class="col-md-12 sidebar-1">
                            <aside id="text-3" class="widget vc_column_vc_container widget_text">
                                <div class="textwidget">
                                    <h2 class="recipe-finder__heading fc-white" style="color: #fff; margin-bottom: 20px; text-align: center; font-size: 35px; line-height: 39px;">Search for Recipes</h2>
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