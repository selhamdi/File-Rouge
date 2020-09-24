<!DOCTYPE html>
<html>

<head>
    <title>Gourmands</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="../css/about1.css">
    <link rel="stylesheet" href="../css/search.css">
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/cantact.css">
    <link rel="stylesheet" href="../css/search.css">
      <link rel="stylesheet" href="../css/style.css">
      <script src="../css/search.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.js"></script>
    <style>

    </style>
</head>
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
	<div class="login-html" style="    margin-top: 6%;
    height: 285px;
    margin-left: 35%;
    text-align: center;">
		<!-- <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">cart crédit</label> -->
		<input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Payement cash</label>
		<div class="login-form">
			<div class="sign-up-htm">
				<div class="group">
					<label for="user" class="label">Nom</label>
					<input id="user" type="text" class="input">
				</div>
				<div class="group">
					<label for="pass" class="label">Prénom</label>
					<input id="pass" type="text" class="input">
				</div>
				<div class="group">
					<label for="pass" class="label">Adresse</label>
					<input id="pass" type="text" class="input">
				</div>
				<div class="group">
					<label for="pass" class="label">Email Address</label>
					<input id="pass" type="email" class="input">
				</div>
				<div class="group">
					<input type="submit" class="button" value="Payement">
				</div>
				<div class="hr"></div>
			</div>
		</div>
	</div>
</div>
