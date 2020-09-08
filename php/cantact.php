<!DOCTYPE html>
<html>

<head>
    <title>Gourmands</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="../css/about1.css">
    <link rel="stylesheet" href="../css/search.css">
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/cantact.css">
    <link rel="stylesheet" href="../css/search.css">
      <link rel="stylesheet" href="../css/style.css">
      <script src="../css/search.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.js"></script>
    <style>

    </style>
</head>
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
                    <li><a href="#"><i class="fa fa-shopping-basket"></i></a></li>

                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><button class="nvrecette"><strong>Ajouter une recette</strong></button></li>
                </ul>
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                <h1 class="H1">Contactez Nous</h1>
                <ol class="breadcrumb text-center">
                    <li><a href="../php/menu-home.php">Accueil</a></li>
                    <li class="active">contactez nous</li>
                </ol>
            </div>
        </div>
        </div>
    </nav>
</header>

<div class="row" style="     text-align: center;
margin-left: 120px;">

    <div class="column">
        <i class="fa fa-envelope"></i>
        <h4>Email Address</h4>
        <p>Salima.elhamdi@hotmail.com</p>
        <p>Salimaeii1997@gmail.com</p>
    </div>
    <div class="column">
        <i class="fa fa-phone"></i>
        <h4>Numéro de téléphone</h4>
        <p>+212630190941</p>
        <p>+212524667191</p>
    </div>
    <div class="column">
        <i class="fa fa-map-marker"></i>
        <h4>Localication</h4><br>

        <p>R206, Ben Guerir</p>
    </div>
</div>

<div class="total">
    <div class="flex">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d59300.996745196964!2d-8.026351763375336!3d31.640005697646586!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xdaf7bcc0bdbda93%3A0x809d83f34d090fa!2sCoin%20Gourmand!5e0!3m2!1sfr!2sma!4v1599225365779!5m2!1sfr!2sma"
            width="600" height="500" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
            tabindex="0"></iframe> </div>
    <div class="form-cantact">
        <h1>Contactez-nous</h1>
        <form action="">
            <input type="text" name="" id="" placeholder="Nom"><br>
            <input type="text" name="" id="" placeholder="Prénom"><br>
            <input type="text" name="" id="" placeholder="Email Adress"><br>
            <input type="text" name="" id="" placeholder="Message" style="height: 150px;"><br>
            <button class="send-message">Send Message</button>
        </form>
    </div>
</div>
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