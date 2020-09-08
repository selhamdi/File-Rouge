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
    <!-- <div>
    <form action="">
        <div>
            <label for=""></label>
            <input type="text" placeholder="">
        </div>
        
        <div>
            <label for=""></label>
            <input type="text" placeholder="">
        </div>
        <div>
            <label for=""></label>
            <input type="text" placeholder="">
        </div>
        <div>
            <label for=""></label>
            <input type="text" placeholder="">
        </div>
        <div class="form-group styling-checkboxes">
							<label for="mt-features">Recipe Difficulty</label> <br>				
								                            <label class="checkbox-inline">
	                                <input type="checkbox" name="mt-features[]" value="86">
	                                Advanced	                                <span class="checkmark"></span>
	                            </label>
	                        	                            <label class="checkbox-inline">
	                                <input type="checkbox" name="mt-features[]" value="85">
	                                Easy	                                <span class="checkmark"></span>
	                            </label>
	                        	                            <label class="checkbox-inline">
	                                <input type="checkbox" name="mt-features[]" value="90">
	                                Intermediate	                                <span class="checkmark"></span>
	                            </label>
	                        						</div>
						<div class="form-group styling-checkboxes">			
							<label for="mt-tags">Cooking Method</label>	 <br>	
								                            <label class="checkbox-inline">
	                                <input type="checkbox" name="mt-tags[]" value="160">
	                                Baking	                                <span class="checkmark"></span>
	                            </label>
	                        	                            <label class="checkbox-inline">
	                                <input type="checkbox" name="mt-tags[]" value="96">
	                                Braising	                                <span class="checkmark"></span>
	                            </label>
	                        	                            <label class="checkbox-inline">
	                                <input type="checkbox" name="mt-tags[]" value="93">
	                                Grilling	                                <span class="checkmark"></span>
	                            </label>
	                        	                            <label class="checkbox-inline">
	                                <input type="checkbox" name="mt-tags[]" value="161">
	                                Roasting	                                <span class="checkmark"></span>
	                            </label>
	                        	                            <label class="checkbox-inline">
	                                <input type="checkbox" name="mt-tags[]" value="94">
	                                Sautéing	                                <span class="checkmark"></span>
	                            </label>
	                        	                            <label class="checkbox-inline">
	                                <input type="checkbox" name="mt-tags[]" value="95">
	                                Searing	                                <span class="checkmark"></span>
	                            </label>
	                        	                            <label class="checkbox-inline">
	                                <input type="checkbox" name="mt-tags[]" value="159">
	                                Steaming	                                <span class="checkmark"></span>
	                            </label>
	                        	                            <label class="checkbox-inline">
	                                <input type="checkbox" name="mt-tags[]" value="97">
	                                Stewing	                                <span class="checkmark"></span>
	                            </label>
	                        	                            <label class="checkbox-inline">
	                                <input type="checkbox" name="mt-tags[]" value="98">
	                                Tossing	                                <span class="checkmark"></span>
	                            </label>
	                        						</div>
    </form>
</div> -->

                <div class="row">
                    <form id="add-new-listing" method="POST">
                        <div class="form-group">
                            <label>Recipe Title</label>
                             <input type="text" value="" placeholder="Your Recipe Title">
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <textarea class="form-control" placeholder="Enter details about your recipe"></textarea>
                        </div>

                        <!-- FORM GROUP: INGREDIENTS -->
                        <div class="form-group">
                            <label for="mt-features">Recipe Ingredients</label> <br>
                            <div class="isiaFormRepeater repeat-section" id="ingredient_name" data-field-id="ingredient_name" data-items-index-array="[1]">
                                <div class="repeat-items">
                                    <div class="repeat-item row" data-field-index="1">
                                        <div class="col-md-10">
                                            <input type="text" class="form-control listing-ingredient_name" name="ingredient_name[]" value="" placeholder="Ingredient. (E.g: 1/2 cup warm water)">
                                        </div>
                                    </div>
                                </div>
                                <button data-repeat-add-btn class="repeat-add pure-button pure-button-primary">Add New Ingredients</button>

                            </div>
                        </div>
                       

</body>

</html>