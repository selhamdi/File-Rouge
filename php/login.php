<!DOCTYPE html>
<html>

<head>
    <title>Gourmands</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/login.css">
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
    <link rel="stylesheet" href="../css/search.css">
</head>
<?php
require('config.php');
session_start();

if (isset($_POST['username'])){
	$username = stripslashes($_REQUEST['username']);
	$username = mysqli_real_escape_string($conn, $username);
	$password = stripslashes($_REQUEST['password']);
	$password = mysqli_real_escape_string($conn, $password);
    $query = "SELECT * FROM `users` WHERE username='$username' and password='".hash('sha256', $password)."'";
	$result = mysqli_query($conn,$query);
	$rows = mysqli_num_rows($result);
	if($rows==1){
	    $_SESSION['username'] = $username;
	    header("Location: index.php");
	}else{
		$message = "Le nom d'utilisateur ou le mot de passe est incorrect.";
	}
}
if (isset($_REQUEST['username'], $_REQUEST['email'], $_REQUEST['password'])){
	// récupérer le nom d'utilisateur et supprimer les antislashes ajoutés par le formulaire
	$username = stripslashes($_REQUEST['username']);
	$username = mysqli_real_escape_string($conn, $username); 
	// récupérer l'email et supprimer les antislashes ajoutés par le formulaire
	$email = stripslashes($_REQUEST['email']);
	$email = mysqli_real_escape_string($conn, $email);
	// récupérer le mot de passe et supprimer les antislashes ajoutés par le formulaire
	$password = stripslashes($_REQUEST['password']);
	$password = mysqli_real_escape_string($conn, $password);
	//requéte SQL + mot de passe crypté
    $query = "INSERT into `users` (username, email, password)
              VALUES ('$username', '$email', '".hash('sha256', $password)."')";
	// Exécute la requête sur la base de données
    $res = mysqli_query($conn, $query);
    if($res){
		$message = "Vous êtes inscrit avec succès..";
    //    echo "<div class='sucess'>
    //          <h3>Vous êtes inscrit avec succès.</h3>
    //          <p>Cliquez ici pour vous <a href='login.php'>connecter</a></p>
	// 		 </div>";
    }
}else{
	$message = "Vous êtes inscrit avec succès..";
}

?>
                   
                 <li href="" onclick=" togglePopup() " class="first-button" ><a><i class="fa fa-user-plus"></i></a></li>
                 <li><a href="#"><i class="fa fa-search" class="openBtn" onclick="openSearch()"> </i></a></li>
                 <div id="back-login" class="back-login" style="    height: 100%;
                                width: 100%;
                                display: none;
                                position: fixed;
                                z-index: 1;
                                top: 0;
                                left: 0;
                                background-color: rgba(0,0,0, 0.9);">
                    <span class="closebtn" onclick="closeSearch()" title="Close Overlay" style="    position: absolute;
    top: 20px;
    right: 45px;
    font-size: 60px;
    cursor: pointer;
    color: white;">×</span>

                    <script>
    function togglePopup() {
document.getElementById("popup-1")
.classList.toggle("active");
  document.getElementById("back-login").style.display = "block";
} 
          
function closeSearch() {
  document.getElementById("back-login").style.display = "none";
}   
</script>

<div class="popup" id="popup-1">
<div class="content">
<div class="login-html" style="background-color:black">

    <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Se connecter</label>
    <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Inscription</label>
    <div class="login-form">
	<form class="box" action="" method="post" name="login">
        <div class="sign-in-htm">
            <div class="group">
                <label for="user" class="label">Email</label>
                <input id="user" type="text" name="username" class="input">
            </div>
            <div class="group">
                <label for="pass" class="label">Mot De Pass</label>
                <input id="pass" type="password" class="input" name="password" data-type="password">
            </div>
            <div class="group">
                <input id="check" type="checkbox" class="check" checked>
                <label for="check"><span class="icon"></span> Gardez-moi connecté</label>
            </div>
            <div class="group">
                <input type="submit" class="button" name="submit" value="Se connecter">
            </div>
            <div class="hr"></div>
            <div class="foot-lnk">
				<a href="#forgot">Informations de compte oubliées ?</a>
				<?php if (! empty($message)) { ?>
    <p class="errorMessage"><?php echo $message; ?></p>
<?php } ?>
            </div>
		</div>
	</form>

	<form class="box" action="" method="post">
        <div class="sign-up-htm">
            <div class="group">
                <label for="user" class="label">Username</label>
                <input id="user" name="username" type="text" class="input">
            </div>
            <div class="group">
                <label for="pass" class="label">Password</label>
                <input id="pass" type="password" name="password" class="input" data-type="password">
			</div>
			<div class="group">
                <label for="pass" class="label">Email Address</label>
                <input id="pass" type="text" name="email" class="input">
            </div>
            <!-- <div class="group">
                <label for="pass" class="label">Repeat Password</label>
                <input id="pass" type="password" class="input" data-type="password">
            </div> -->
          
            <div class="group">
                <input type="submit"  name="sing" class="button" value="Sign Up">
            </div>
            <div class="hr"></div>
            <div class="foot-lnk">
				<label for="tab-1">Already Member?</a>
				<?php if (! empty($message)) { ?>
    <p class="errorMessage"><?php echo $message; ?></p>
<?php } ?>
            </div>
		</div>
		</form>
    </div>
</div>
</div>

</div >
    
</section>  


</body>

</html>