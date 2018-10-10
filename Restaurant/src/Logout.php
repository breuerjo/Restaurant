<!DOCTYPE html>
<html lang="en">
<head>

<title>Logout</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="..\css\bootstrap.min.css">
<link rel="stylesheet" href="..\css\style.css">
<link rel="stylesheet" href="..\css\w3.css">
<script src="..\js\bootstrap.min.js"></script>
<script	src="..\js\jquery.min.js"></script>
</head>

<body id="Impressum" data-spy="scroll" data-target=".navbar"
	data-offset="50">

<?php
include "Funktionen.php";
session_start();
session_destroy();

?>


<div id="Logout" class="container-fluid text-center">
		<br>
		<h1 id="Logout">
			<b>Logout erfolgreich</b>
		</h1>
		<br>
		<button class="w3-button w3-red">
			<a href="Mitarbeiter-Login.php">Zur&uuml;ck zur Login-Seite</a>
		</button>

	</div>
	<br>

	<footer class="container-fluid md-12 text center navbar-fixed-bottom">
		<div class="col-md-2 navbar-text pull-left">
			<p>
				<a href="Impressum.php"><b>Impressum</b></a>
			</p>
		</div>
		<div id="testDiv" class="col-md-7 navbar-text pull-left">
			<p>
				<b></b>
			</p>
		</div>
		<div class="col-md-2 navbar-text pull-right">
			<p>
				<a href="Kontakt.php"><b>Kontakt</b></a>
			</p>
		</div>
	</footer>

	<script>
$.ajax({ url: 'http://localhost/RestaurantJava/Besucherklicker?login=0',
	dataType: 'html',
	success: function(response)
	{ $('#testDiv').html(response); }
	});
</script>


</body>
</html>