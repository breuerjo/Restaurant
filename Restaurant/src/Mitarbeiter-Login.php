<!DOCTYPE html>
<html>
<?php
include "Funktionen.php";
?>
<head>

<title>Mitarbeiter-Login</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="..\css\bootstrap.min.css">
<link rel="stylesheet" href="..\css\style.css">
<link rel="stylesheet" href="..\css\w3.css">
<script src="..\js\bootstrap.min.js"></script>
<script	src="..\js\jquery.min.js"></script>
</head>
<body id="Login">
	<div class="container text-center">
		<br> <br>
		<h2>
			<b>Restaurant <?php echo getRestaurantName(); ?></b>
		</h2>
		<h3>Bitte melden Sie sich mit ihrem Benutzername an!</h3>
		<br> <img src="..\img\Logo.jpg" width="30%"></img> <br> <br>

	</div>


	<form class="form-horizontal text-left" method="POST" action="EinloggenMitarbeiter.php">

		<div class="container">

			<label><b>Benutzername</b></label> 
			<input type="text" id="user" name="user" size="40" placeholder="Geben Sie bitte Ihren Benutzername ein"> 
			
			<label><b>Passwort</b></label>
			<input type="password" id="pass" name="pass" size="40" placeholder="Geben Sie bitte Ihr Passwort ein"> 
			
<!-- 			<input id="button" type="submit" name="login" value="Log-In"> -->
			
			<button id="checkin" class="btn btn-default">Anmelden</button>
			
			<button class="btn btn-default">
				<a href="Login.php">Zur&uuml;ck</a>
			</button>
		</div>

	</form>
<br>
<br>
<script>
$.ajax({ url: 'http://localhost/RestaurantJava/Besucherklicker?login=0',
	dataType: 'html',
	success: function(response)
	{ $('#testDiv').html(response); }
	});


function getUser(){
    return document.getElementById('user').value;
}
function getPass(){
    return document.getElementById('pass').value;
}

document.getElementById("checkin").addEventListener("click", function(){
    jQuery.ajax({
        url: "EinloggenMitarbeiter.php",
         type: "POST",
         data: "user=" + getUser() + "&pass=" + getPass(),

     });
    
});
</script>
</body>

	<footer class="container-fluid md-12 text center navbar-fixed-bottom">
		<div class="col-md-2 navbar-text pull-left">
			<p>
				<a id="besonders" href="Impressum.php"><b>Impressum</b></a>
			</p>
		</div>
		<div id="testDiv" class="col-md-7 navbar-text pull-left">
			<p>
				<b></b>
			</p>
		</div>
		<div class="col-md-2 navbar-text pull-right">
			<p>
				<a id="besonders2" href="Kontakt.php"><b>Kontakt</b></a>
			</p>
		</div>
	</footer>
</html>
