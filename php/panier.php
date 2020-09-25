<?php 
ob_start();
?>
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/css/materialize.min.css">
    <style>
        .z-depth-1, nav, .card-panel, .card, .toast, .btn, .btn-large, .btn-floating, .dropdown-content, .collapsible, .side-nav {
    box-shadow: 0 2px 2px 0 rgba(0,0,0,0), 0 1px 5px 0 rgba(0,0,0,0), 0 3px 1px -2px rgba(0,0,0,0);
}
.horizontal{
    box-shadow: 0 2px 2px 0 rgba(0,0,0,0.3), 0 1px 5px 0 rgba(0,0,0,0.3), 0 3px 1px -2px rgba(0,0,0,0.3);
}
.card.horizontal .card-image img {
    max-width: 80%;
    height: 300px;
}
#contact { 
  
    margin: 4em auto;
    width: 20%;
    height: 60px;
    line-height: 30px;
    background: #528f2d;
    color: white;
    font-weight: 700;
    text-align: center;
    cursor: pointer;
    border: 1px solid white;
}

#contact:hover { background: #528f2d; }
#contact:active { background: #528f2d; }

#contactForm { 
  display: none;
  border: 6px solid #528f2d; 
  padding: 2em;
  width: 600px;
  text-align: center;
  background: #fff;
  position: fixed;
  top:50%;
  left:50%;
  transform: translate(-50%,-50%);
 
  
}

#contactForm input, #contactForm textarea { 
  margin: .8em auto;
  font-family: inherit; 
  text-transform: inherit; 
  font-size: inherit;
  display: block; 
  width: 280px; 
  padding: .4em;
}
#contactForm textarea { height: 80px; resize: none; }

#contactForm .formBtn { 
  width: 140px;
  display: inline-block;
  
  background: #528f2d;
  color: #fff;
  font-weight: 100;
  font-size: 1.2em;
  border: none;
  height: 50px;
}
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
                    <li><a class="text-white" href="index.php">Accueil</a></li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Catégories <span
                                class="caret"></span></a>
                        <ul class="dropdown-menu">
                        <li><a href="cuisine.php">Cuisine</a></li>
                <li><a href="patisiere.php">Pâtisserie</a></li>
                <li><a href="dessert.php">Dessert</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Pages <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#" class="drop">Comment ça marche</a></li>
                            <li><a href="#">Qui sommes nous?</a></li>
                        </ul>
                    </li>
                  
                    <?php session_start(); if(isset($_SESSION['User'])): ?>
              <li><a href="../Traitement/logout.php"><i class="fa fa-sign-out"></i></a></li>
            <?php else: ?>
              <li><a href="Authe.php"><i class="fa fa-user-plus"></i></a></li>
            <?php endif; ?>
    
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
    <?php
include 'db.php';
if(isset($_GET['idU']))
{

  $query="select panier.*, recette.image, recette.name, recette.prix from panier JOIN recette where panier.idP=recette.id and idU=".$_GET['idU'];
  $result = $con->query($query);
  $total=0;
  while($row = $result->fetch_assoc()) {
?>
    <div class="card horizontal" style="background-color: #f7f6f7;">
      <div class="card-image">
        <img src="../images/<?php echo $row["image"] ?>">
      </div>
      <div class="card-stacked">
        <div class="card-content">
          <p><?php echo $row["name"] ?></p>
          <p><?php echo $row["prix"] ?></p>
          <?php $total=$total+$row["prix"] ?>
          <a href="delete.php?id=<?php echo $row["idP"]?>&&idP=<?php echo $row["id"]?>&&idU=<?php echo $_GET['idU'] ?>">Delete</a>
          
        </div>
      </div>
    
    </div>
    <?php
}
if ($result->num_rows === 0)
{
   echo "<p>Aucun Produit</p>";
}

}
?>
 <h5 style="text-align: right;">Total:<?php echo $total ?></h5>
  </div>
    <i class="far fa-shopping-cart"></i> 
    </div>

    <a href="index.php"><button class="return-shop"> Retour à la boutique</button></a>
    <button id="contact"  class="return-shop">Payement</button>
</div>

<div id="contactForm">

  <h1>Checkout Form!</h1>
  <h5><?php echo $_SESSION['User']?> welcome to our shop</h5>
  
  <form action="" method="POST">
    <input placeholder="fullname" name="fullname" type="text" required="" >
    <input placeholder="adress" name="adress" type="text" required="">
    <input placeholder="cash" name="cash" type="text" value="cash">
    <input placeholder="email" name="email" type="text" required="">
    <input placeholder="telephone" name="telephone" type="text" required="">
    <button class="formBtn" name="savepay" type="submit">Valider</button>
  </form>
</div>

<?php

include 'db.php';

if (isset($_POST["savepay"])) {

    $fullname=$_POST['fullname'];
    $adress=$_POST['adress'];
    $cash=$_POST['cash'];
    $email=$_POST['email'];
    $telephone=$_POST['telephone'];
    $idU=$_SESSION['ID'];
    $sql = "Insert into checkout (fullname,adress,cash,email,telephone) values (' $fullname','$adress','$cash','$email','$telephone')";
        
    if (mysqli_query($con, $sql)) {
        
        $sql2 = "delete from panier where idU=$idU";

        if (mysqli_query($con, $sql2)) {
        header("location:panier.php?idU=$idU");
    
    } 
}
}

?>


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
                                    <h2 class="recipe-finder__heading fc-white" style="color: #fff; margin-bottom: 20px; text-align: center; font-size: 35px; line-height: 39px;">Recherche De Recette</h2>
                               </div>
                            </aside>                 
</footer>

<script>
    $(function() {
  
  // contact form animations
  $('#contact').click(function() {
    $('#contactForm').fadeToggle();
  })
  $(document).mouseup(function (e) {
    var container = $("#contactForm");

    if (!container.is(e.target) // if the target of the click isn't the container...
        && container.has(e.target).length === 0) // ... nor a descendant of the container
    {
        container.fadeOut();
    }
  });
  
});
</script>
</body>

</html>