<?php 
ob_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Gourmands</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="../css/search.css">
  <link rel="stylesheet" href="../css/style.css">
  <!-- <link rel="stylesheet" href="../css/about1.css"> -->
  <script src="../css/search.js"></script>
  <style>
 
</style>
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
              
            <li><a href="panier.php?idU=<?php echo  $_SESSION['ID'] ?>"><i class="fa fa-shopping-basket"></i></a></li>
           

          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><button class="nvrecette"><a href="ajout-recipe.php"><strong>Ajouter une recette</strong></a></button></li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="row header-text">
      <div class="col-md-12">
        
        <h1> Le meilleur endroit pour </h1>
        <h1>les gourmands et les passionés de la cuisine </h1>
        <h3>Découvrez nos recettes originales ! </h3>
      </div>
    </div>

  </header>

  <div style="    text-align: center;
    margin-top: 62px;">
      
    <img src="https://playt.com/wp-content/themes/playt/img/home-decoration.png" alt="">
    <h5>Comment ça marche?</h5>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-sm-6" style="margin-top:93px;">
        <div class="col-sm-3">
          <span>01</span>
        </div>
        <div class="col-sm-3">
          <h5>"Découvrez une nouvelle<br>recette"</h5>
        </div>
        <p>Trouvez l'inspiration culinaire et les recettes de fromages que vous voulez manger. Avec notre vaste collection de recettes, vous n'aurez plus à manger les mêmes repas ennuyeux!</p>
      </div>
      <div class="col-sm-6 other">
        <img src="https://playt.com/wp-content/themes/playt/img/home-zigzag-01.png" alt="">
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-sm-6 other">
        <img src="https://playt.com/wp-content/themes/playt/img/home-zigzag-02.png" alt="">
      </div>
      <div class="col-sm-6" style="margin-top:93px;">
        <div class="col-sm-3">
          <span>02</span>
        </div>
        <div class="col-sm-3">
          <h5 style=" margin-top: 12px;">"Commander l'ingrédient"</h5>
        </div>
        <p style="margin-top: 142px;">Nous transformons les ingrédients de la recette en une liste de courses personnalisable. Échangez des articles, supprimez des articles dont vous n'avez pas besoin ou ajoutez d'autres articles d'épicerie dont vous avez besoin. Nous travaillons avec nos partenaires d'épicerie en ligne pour livrer à votre porte ou récupérer votre commande dans votre magasin local.</p>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-sm-6" style="margin-top:93px;">
        <div class="col-sm-3">
          <span>03</span>
        </div>
        <div class="col-sm-3">
          <h5>"préparer votre repas"</h5>
        </div>
        <p>Obtenez des ingrédients directement dans votre cuisine afin de créer facilement des plats délicieux. Faire de multiples voyages au supermarché et des ingrédients oubliés une chose du passé!</p>
      </div>
      <div class="col-sm-6 other">
        <img src="https://playt.com/wp-content/themes/playt/img/home-zigzag-03.png" alt="">
      </div>
    </div>
  </div>

  <script type="text/javascript">
    $(".num").counterUp({
      delay: 10,
      time: 1000
    });
  </script>
  <div class="container-image-cercle">
    <div class='container' style="width: 54%;">
      <div class='row'>
        <div class="titreimage">
          <h5>3/raisons simples de choisir Gourmand</h5>
          <p>Avec les bons ingrédients,vous pouvez créer quelque chose d'extraordinaire.</p>
        </div>
        <div class="container-image-cerle" style="display: flex;">
          <div class='col-sm-3' style="width: 33.33%;">
            <div class="cercle-image">
              <img src="https://production-assets.gousto.co.uk/build/latest/0035eb3e66c70ee54679f62dfb834cbc.jpg" width="220" height="220" P style="border-radius: 50%;" alt="" />
            </div>
            <div class="lesnoms">
              <h3>Variété</h3>
              <h5>Des classiques de la famille et des repas de dix minutes au Fine Dine In.</h5>
            </div>
          </div>
          <div class='col-sm-3' style="width: 33.33%;">
            <div class="cercle-image">

              <img src="https://production-assets.gousto.co.uk/build/latest/2f29d0ab6f53afaabe7946ed1875d96e.jpg" width="220" height="220" alt="" style="border-radius: 50%;" />
            </div>
            <div class="lesnoms">
              <h3>Qualité</h3>
              <h5>Des ingrédients frais pour des dîners savoureux et faits maison.</h5>
            </div>
          </div>
          <div class='col-sm-3' style="width: 33.33%;">
            <div class="cercle-image">

              <img src="https://production-assets.gousto.co.uk/build/latest/fa90fa000be25f349f05da43ca9ef1da.jpg" width="220" height="220" alt="" style="border-radius: 50%;" />
            </div>
            <div class="lesnoms">
              <h3>Simplicité</h3>
              <h5>Recettes faciles à suivre et ingrédients parfaitement dosés.</h5>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div>
  </div>
  </div>
  <div class="main-content">
    <div class="portfolio">
      <div class="portfolio-item rec-land-lg-1 text">

        <h3>Meilleur Recette Mm </h3>
        <p>Choisissez parmi des milliers de recettes
          et obtenez des ingrédients frais livrés
          directement à votre porte.</p>

      </div>
      <div class="portfolio-item rec-land-md"></div>
      <div class="portfolio-item rec-port-tall"></div>
      <div class="portfolio-item sq-1"></div>
      <div class="portfolio-item rec-port-sm"></div>
      <div class="portfolio-item rec-port-lg"></div>
      <div class="portfolio-item rec-land-lg-2"></div>
      <div class="portfolio-item sq-2"></div>

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
                                      </div>
                </aside>
                <aside id="custom_html-3" class="widget_text widget vc_column_vc_container widget_custom_html">
                  <div class="textwidget custom-html-widget">
                    <div class="mt-car-search wow fadeInUp mtsearchform-style-v2 ">
                      <div class="foodhub-header-searchform">
                        <form method="GET" action="" autocomplete="off">
                          <input type="hidden" name="post_type" value="mt_listing" />
                          <div class="row">
                          </div>
                        </form>
                        <!-- <div id="datafetch"></div>
                        </div></div></div></aside></div></div></div></div> 
                              </div> -->
                      </div>
  </footer>
</body>

</html>