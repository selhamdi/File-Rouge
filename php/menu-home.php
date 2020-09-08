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
      <script src="../css/search.js"></script>
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
                <li ><a href="#" class="drop">Comment ça marche</a></li>
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
      </div>
    </nav>
    <div class="row header-text">
      <div class="col-md-12">
        <h1> Le meilleur endroit pour </h1>
        <h1>les gourmands et les passionés de la cuisine </h1>
        <h3>Découvrez nos recettes originales ! </h3>
    </div>
    </div>
    <div class="recherche">
      <input type="text" name="motcle" value="Mot clé">
      <select>
      <option value="#">Catégorie</option>
      <option value="#">Cuisine</option>
      <option value="#">Pâtisserie</option>
      <option value="#">Déssert</option> 
    </select>
    <button class="btn-s"><i class="fa fa-search" ></i></button>
    </div>
  
  </header>
  
</body>
</html>
