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
    <link rel="stylesheet" href="../css/recipe.css">
    <link rel="stylesheet" href="../css/search.css">

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
                    <h1 class="H1">Ajouter Une Recette</h1>
                    <ol class="breadcrumb text-center">
                        <li><a href="../php/menu-home.php">Accueil</a></li>
                        <li class="active">Ajouter une recette</li>
                    </ol>
                </div>
            </div>
            </div>
        </nav>
</header>

    <div class="row">
        <form id="add-new-listing" method="POST">
            <div class="form-group">
                <label>Recipe Title</label>
                <input type="text" value="" placeholder="Your Recipe Title">
            </div>
            <div class="form-group">
                <label>Description</label>
                <textarea id="story" name="story" rows="3" cols="33" placeholder="Enter details about your recipe"></textarea>
            </div>

            <div class="form-group">
                <label>Ingrédients de la recette</label>
                <!-- FORM GROUP: INGREDIENTS -->
                <SCRIPT LANGUAGE="JavaScript">
                    function addField() {
                        var field = "<input type='text' name='champ' value='Ingrédient. (Par exemple: 1/2 tasse d eau tiède)' size='7' maxlength='10'/><br/>";
                        document.getElementById('fields').innerHTML += field;
                    }
                </SCRIPT>
                <div class="ensemble-input-button">
                    <div id="fields">
                        <input name="champ" type="text" value='Ingrédient. (Par exemple: 1/2 tasse d eau tiède)' size="7" maxlength="10"><br />
                    </div>
                </div>
                <input class="button" type="button" value="Ajouter un nouvel ingrédient" onClick="addField();">
            </div>
            <!-- </div> -->
            <div class="form-group">
                <label for="">Instructions de recette</label>
                <SCRIPT LANGUAGE="JavaScript">
                    function addField2() {
                        var field = "<textarea name='' id='' cols='1' rows='2' placeholder='Instruction: (Oeuf: Cuire au four préchauffé pendant 30 minutes.)' style='text-align: center;'></textarea><br/>";
                        document.getElementById('fields2').innerHTML += field;
                    }
                </SCRIPT>
                <div class="ensemble-input-button">
                    <div id="fields2">
                        <textarea name="" id="" cols="1" rows="2" placeholder="Instruction: (Oeuf: Cuire au four préchauffé pendant 30 minutes.)" style="text-align: center;"></textarea>
                    </div>
                </div>
                <input class="button" type="button" value="Ajouter un nouvel ingrédient" onClick="addField2();">
            </div>
            <div class="form-group">
                <label>Recette Difficulté</label>
                <input type="checkbox"><span>Avancé</span>
                <input type="checkbox"><span>Facile</span>
                <input type="checkbox"><span>Intermédiaire</span>
            </div>
            <div class="form-group">
                <div class="select1">

                <label>Recette Difficulté</label>
                <input type="checkbox"><span>Braiser </span>
                <input type="checkbox"> <span> Cuisson</span>
                <input type="checkbox"><span> gril</span>
                <input type="checkbox"><span> grillage</span>
                <input type="checkbox"><span> Brûlant</span>
                <input type="checkbox"><span> grillage</span>
                <input type="checkbox"><span> Brûlant</span>
                </div>

            </div>

            <div class="form-group">
                <div>
                <div class="container">
  <div class="row" style="margin-top: 27px;
">
    <div class="col-sm-6">
    <label>Catégorie de recette</label>
                <select name="pets" id="pet-select">
                    <option value=""  style="text-align: center;">---Catégorie de recette---</option>
                    <option value="dog">Dog</option>
                    <option value="cat">Cat</option>
                    <option value="hamster">Hamster</option>
                    <option value="parrot">Parrot</option>
                    <option value="spider">Spider</option>
                    <option value="goldfish">Goldfish</option>
                </select>
    </div>
    <div class="col-sm-6 other">
    <label>Catégorie de recette</label>
                <select name="pets" id="pet-select" style="margin-left: -24%;
">
                    <option value="">--Catégorie de recette--</option>
                    <option value="dog">Dog</option>
                    <option value="cat">Cat</option>
                    <option value="hamster">Hamster</option>
                    <option value="parrot">Parrot</option>
                    <option value="spider">Spider</option>
                    <option value="goldfish">Goldfish</option>
                </select>
    </div>
  </div>
</div>
            </div>
            <div class="form-group">
                <label>Lien vidéo</label>
                <input type="text" value="" placeholder="e.g https://youtu.be/YoxHEBeF6s0">
                </div>

            <button class="btn-ajt-rct">Ajouter La Recette</button>
    </div>
                </form>

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