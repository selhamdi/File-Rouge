<?php 
ob_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login Logout</title>
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.js"></script>
    <link rel="stylesheet" href="../css/style.css">
    <style>
        a:link {
  text-decoration: none;
  color: #000;
}

#form {
  width: 525px;
  height: 680px;
  background: url('../images/how-it-works-1.png'), #6DB3F2;
  background-color: rgba(0, 0, 0, 0.6);
  box-shadow: 0px 30px 65px -15px #000;
  padding: 40px 60px;
  box-sizing: border-box;
  font-weight: bold;
  
}


/*Tabs*/

#form ul {
  width: 300px;
  list-style: none;
  padding: 50px 0 0 20px;
  margin: 0;
}

#form ul li {
  width: 96px;
  display: inline-block;
  font-size: 1.35rem;
  letter-spacing: 0.5px;
  color: rgba(255, 255, 255, 0.3);
  margin-right: 35px;
  cursor: pointer;
  position: relative;
  text-align: center;
  transition: all 0.5s;
}

#form ul li.active {
  color: #000;
}

.slideline {
  display: block;
  position: absolute;
  top: -8px;
  bottom: 0;
  left: 0;
  height: 2px;
  background: #36611e;
  transition: all 0.5s;
}


/*Content*/
#tab-container{
  height:500px;
}
#tab1 {
  padding-top: 60px;
}

form input {
  
  width: 100%;
  line-height: 38px;
  padding: 0 20px;
  color: #ffffff;
  font-size: 0.85rem;
  letter-spacing: 0.5px;
  background: rgba(255, 255, 255, 0.1);
  border: 2px solid rgba(255, 255, 255, 0);
  border-radius: 19px;
  box-sizing: border-box;
  transition: all 0.5s;
}

input:focus {
  display: block;
  outline: none;
  border: 2px solid rgba(255, 255, 255, 0.5);
  background: transparent;
}

form label {
  display: block;
  color: black;
  font-size: 0.75rem;
  padding: 8px 0px 0 20px;
  line-height: 40px;
}

input[type="checkbox"] {
  -webkit-appearance: none;
  background-color: rgba(255, 255, 255, 0.1);
  padding: 1px 4px;
  width: 17px;
  height: 17px;
  border-radius: 2px;
  float: left;
  margin: 30px 0px 30px 20px;
  border-color: transparent;
  display: relative;
}

input[type="checkbox"]:checked {
  background: #1161ed;
}

input[type="checkbox"]:checked:after {
  content: '';
  display: block;
  width: 3px;
  height: 6px;
  border: solid #fff;
  border-width: 0 0.13rem 0.13rem 0;
  transform: rotate(45deg);
}

#check-label {
  float: left;
  font-size: 0.9rem;
  color: #ffffff;
  padding: 0;
  line-height: 17px;
  margin: 30px 0 0 12px;
}

.submit {
 
  width: 100%;
  line-height: 40px;
  border: none;
  border-radius: 20px;
  font-size: 0.85rem;
  color: #fff;
  background: #518f2d;
  transition: all 0.5s;
  outline: none;
  margin-top: 50px;
}

.submit:hover {
  background: #36611e;
  box-shadow: 0px 4px 60px -15px #36611e;
  cursor: pointer;
}

/*Forgot Password*/
.hint {
  padding-top: 40px;
  text-align: center;
  border-top: 2px solid rgba(255, 255, 255, 0.1);
}
.forgot{
  margin-top:80px;
}
.help{
  margin-top:50px;
}

.hint a {
  color: rgba(255, 255, 255, 0.2);
  font-size: 0.9rem;
  letter-spacing: 0.5px;
  transition: all 0.5s;
}

.hint a:hover {
  color: rgba(255, 255, 255, 1);
  cursor: pointer;
}

#container p {
  margin-top: 40px;
  font-size: 0.85rem;
  text-align: center;
  color: #7A7A7A;
}
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
            <?php if(isset($_SESSION['FullName'])): ?>
              <li><a href="../Traitement/logout.php"><i class="fa fa-user"></i></a></li>
            <?php else: ?>
              <li><a href="Authe.php"><i class="fa fa-user-plus"></i></a></li>
            <?php endif; ?>
            
            <li><a href="http://localhost/File-rouge/php/panier.php"><i class="fa fa-shopping-basket"></i></a></li>
           

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

  <?php include '../Traitement/sign.php'; ?>


<div id="container" style="display: flex; justify-content: center; margin-top:100px;">

  <div id="form">
    <ul>
      <li rel="tab1" class="active">SIGN IN</li>
      <li rel="tab2">SIGN UP</li>
      <li class="slideline"></li>
    </ul>

    <div id="tab-container">
      <div id="tab1" class="tab-content" rel="tab1">

        <form id="signin" action="" method="post">
        <p class="text-danger" style="text-align: center; width:100%; color: #ffffff;font-size: 20px;font-weight: bolder;">
                     <?php  
                     if(isset($Message))  
                     {  
                          echo $Message;  
                     }  
                     ?>  
                </p>
          <label for="username">USERNAME</label>
          <input type="text" name="FullName" required="">
          <label for="password">PASSWORD</label>
          <input type="password" name="Pasword" required="">
          <button type="submit" class="submit" name="butlog">SIGN UP</button>
        </form>

      </div>

      <div id="tab2" class="tab-content" rel="tab2">

        <form id="signup" action="" method="post">
        <p class="text-danger" style="text-align: center; width:100%; color: #ffffff;font-size: 20px;font-weight: bolder;">
                     <?php  
                     if(isset($Message))  
                     {  
                          echo $Message;  
                     }  
                     ?>  
                </p>
          <label for="username">USERNAME</label>
          <input type="text" name="FullName" required="">
          <label for="password">EMAIL</label>
          <input type="email" name="Email"  required="">
          <label for="password">PASSWORD</label>
          <input type="password" name="Pasword" required="">
          
        
          <button type="submit" class="submit" name="butsave">SIGN UP</button>
        </form>
      </div>
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
                <h2 class="recipe-finder__heading fc-white" style="color: #fff; margin-bottom: 20px; text-align: center; font-size: 35px; line-height: 39px;">
                  recherche De Recettes</h2>
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

<script>
    $(".tab-content").hide();
$(".tab-content:first").show();
$("#form ul li").click(function() {

  $("#form ul li").removeClass("active");
  $(this).addClass("active");
  if ($(this).hasClass('slideline')) {
    return;
  }
  var whatTab = $(this).index();
  var howFar = 135 * whatTab;
  $(".slideline").css({
    left: howFar + "px"
  });
  $(".tab-content").hide();
  var activeTab = $(this).attr("rel");
  $("#" + activeTab).fadeIn(500);
});
</script>