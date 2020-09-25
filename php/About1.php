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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/about1.css">
    <link rel="stylesheet" href="../css/search.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.js"></script>
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
                    <li><a class="text-white" href="index.php">Accueil</a></li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Catégories <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                        <li><a href="cuisine.php">Cuisine</a></li>
                                <li><a href="patisiere.php">Pâtisserie</a></li>
                                <li><a href="dessert.php">Dessert</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Pages <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                        <li><a href="cantact.php" class="drop">Comment ça marche</a></li>
                            <li><a href="About1.php">Qui sommes nous?</a></li>
                        </ul>
                    </li>
                    <?php session_start(); if(isset($_SESSION['User'])): ?>
              <li><a href="../Traitement/logout.php"><i class="fa fa-sign-out"></i></a></li>
            <?php else: ?>
              <li><a href="Authe.php"><i class="fa fa-user-plus"></i></a></li>
            <?php endif; ?>
                    <li><a href="panier.php"><i class="fa fa-shopping-basket"></i></a></li>

                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><button class="nvrecette"><strong>Ajouter une recette</strong></button></li>
                </ul>
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                <h1 class="H1">Qui nous sommes ?</h1>
                <ol class="breadcrumb text-center">
                    <li><a href="../php/menu-home.php">Accueil</a></li>
                    <li class="active">Qui sommes nous?</li>
                </ol>
            </div>
        </div>
        </div>
    </nav>
</header>
<tbody>
</div>
<div class="row">
<div class="titre-video" style="    margin-top: 30%;">
        <h2 class="section-title" style="margin-top: 20px;">La plus grande communauté de recettes</h2>
    </div>
</div>
    
    <div id="main_container">
        <div id="overlay"></div>
        <video id="video" width="" height="" controls="controls" loop="loop" autoplay="">
            <source src="http://localhost/File-rouge/images/video-gourmand.mp4" type="video/mp4" />
        </video>
    </div>
</div>
</div>
<div class="middle">
    <div class="counting-sec">
        <div class="inner-width">
            <div class="col">
                <div class="num">+1000</div>
                Recettes Uniques Sur Gourmands
            </div>

            <div class="col">
                <div class="num">+4000</div>
                Abonnés Et Clients Heureux
            </div>

            <div class="col">
                <div class="num">+400</div>
                De Nouvelles Recettes Chaque Jour
            </div>

            <div class="col">
                <div class="num">+100</div>
                Membres Dans La Communauté
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(".num").counterUp({
        delay: 10,
        time: 1000
    });
</script>
<div class='container'>
    <div class='row'>
        <h2 class="titreimage">Meilleurs auteurs de recettes</H1>
            <div class='col-sm-3'>
                <div class='img-round'>
                    <img src='../images/1.jpg'>
                </div>
                <div class="lesnoms">
                    <h3>Dorian Sedi</h3>
                    <h5>Porter de cuisine</h5>
                </div>
                <ul class="fxt-socials">
                    <li class="fxt-facebook fxt-transformY-50 fxt-transition-delay-5"><a href="#" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                    <li class="fxt-twitter fxt-transformY-50 fxt-transition-delay-6"><a href="#" title="twitter"><i class="fab fa-twitter"></i></a></li>
                    <li class="fxt-linkedin fxt-transformY-50 fxt-transition-delay-8"><a href="#" title="linkedin"><i class="fab fa-linkedin-in"></i></a></li>
                    <li class="fxt-pinterest fxt-transformY-50 fxt-transition-delay-8">
                        <a href="#" title="pinterest"><i class="fab fa-pinterest-p"></i></a>
                    </li>
                </ul>
            </div>
            <div class='col-sm-3'>
                <div class='img-round'>
                    <img src='../images/2.jpg'>
                </div>
                <div class="lesnoms">
                    <h3>Emma Ava</h3>
                    <h5>Chef de cuisine</h5>
                </div>
                <ul class="fxt-socials">
                    <li class="fxt-facebook fxt-transformY-50 fxt-transition-delay-5"><a href="#" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                    <li class="fxt-twitter fxt-transformY-50 fxt-transition-delay-6"><a href="#" title="twitter"><i class="fab fa-twitter"></i></a></li>
                    <li class="fxt-linkedin fxt-transformY-50 fxt-transition-delay-8"><a href="#" title="linkedin"><i class="fab fa-linkedin-in"></i></a></li>
                    <li class="fxt-pinterest fxt-transformY-50 fxt-transition-delay-8">
                        <a href="#" title="pinterest"><i class="fab fa-pinterest-p"></i></a>
                    </li>
                </ul>
            </div>
            <div class='col-sm-3'>
                <div class='img-round'>
                    <img src='../images/3.jpg'>
                </div>
                <div class="lesnoms">
                    <h3>Thomas Moriz</h3>
                    <h5>Sous Chef</h5>
                </div>
                <ul class="fxt-socials">
                    <li class="fxt-facebook fxt-transformY-50 fxt-transition-delay-5"><a href="#" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                    <li class="fxt-twitter fxt-transformY-50 fxt-transition-delay-6"><a href="#" title="twitter"><i class="fab fa-twitter"></i></a></li>
                    <li class="fxt-linkedin fxt-transformY-50 fxt-transition-delay-8"><a href="#" title="linkedin"><i class="fab fa-linkedin-in"></i></a></li>
                    <li class="fxt-pinterest fxt-transformY-50 fxt-transition-delay-8">
                        <a href="#" title="pinterest"><i class="fab fa-pinterest-p"></i></a>
                    </li>
                </ul>
            </div>
            <div class='col-sm-3'>
                <div class='img-round'>
                    <img src='../images/4.jpg'>
                </div>
                <div class="lesnoms">
                    <h3>Laura Zola</h3>
                    <h5>Executive Chef</h5>
                </div>
                <ul class="fxt-socials">
                    <li class="fxt-facebook fxt-transformY-50 fxt-transition-delay-5"><a href="#" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                    <li class="fxt-twitter fxt-transformY-50 fxt-transition-delay-6"><a href="#" title="twitter"><i class="fab fa-twitter"></i></a></li>
                    <li class="fxt-linkedin fxt-transformY-50 fxt-transition-delay-8"><a href="#" title="linkedin"><i class="fab fa-linkedin-in"></i></a></li>
                    <li class="fxt-pinterest fxt-transformY-50 fxt-transition-delay-8">
                        <a href="#" title="pinterest"><i class="fab fa-pinterest-p"></i></a>
                    </li>
                </ul>
            </div>
    </div>
</div>
</tbody>
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
                               </div>
                            </aside>
                         
</footer>



</body>

</html>