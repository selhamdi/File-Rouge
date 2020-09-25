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
                        <?php session_start(); if(isset($_SESSION['ID'])): ?>
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
                    <?php

include 'db.php';
$sql = "select * from recette where category='Desserts';";
$result = $con->query($sql);

if ($result->num_rows > 0) {
     
  // output data of each row
  while($row = $result->fetch_assoc()) {
  
  ?>

                            <form action="" method="POST">
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
                        </form>
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