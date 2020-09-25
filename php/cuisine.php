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
    <link rel="stylesheet" href="../css/style.css">
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
                    <input type="text" value="Your Recipe Title"  placeholder="Your Recipe Title">
                    <select name="pets" id="pet-select">
                        <option value="" style="text-align: center;">---Catégorie de recette---</option>
                        <option value="dog">Cuisine</option>
                        <option value="cat">Dessert</option>
                        <option value="hamster">Patissierie</option>
                    </select>
                    <button>Recherche</button>
                </div>
                <div class="container my-5">
                    <div class="row row-eq-height">
                    <?php

include 'db.php';
$sql = "select * from recette where category='Cuisine';";
$result = $con->query($sql);

if ($result->num_rows > 0) {
     
  // output data of each row
  while($row = $result->fetch_assoc()) {
  
  ?>
                     
                        <div class="col-12 col-md-6 col-lg-4 col-xl-3 mb-5">
                            <div class="product-card h-100 mb-0">
                                <a class="product-card__content" href="#">
                                    <span class="product-card__img" style='background-image:url(../images/<?php echo $row["image"] ?>)'></span>
                                    <span class="product-card__title">
                                    <?php echo $row["name"] ?>
                                    </span>
                                    <span class="product-card__price">
                                    $ <?php echo $row["prix"] ?>
                                    </span>
                                </a>
                                <div class="product-card__actions">
                                <a class="product-card__btn mr-3" href="details.php?id=<?php echo $row['id']?>&&idU=<?php echo $_SESSION['ID']?>">
                                        <i class="fas fa-plus mr-2"></i>
                                        View </a>
                                  
                                </div>
                            </div>
                        </div>

                      
                        <?php
}
} 
$con->close();
?>                 
        
                       
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
                                    
                                                </div>
                                            </aside>
                                           
                </footer>
</body>

</html>