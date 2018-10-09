<!DOCTYPE>
<html>

<head>
<title>Neues Gericht</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet"
	href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="..\css\style.css">
<script
	src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script
	src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!--Diese beiden sind neu-->
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Karma">-->

</head>

<body id="NeuesGericht" data-spy="scroll" data-target=".navbar"
	data-offset="50">

<?php
session_start();
include 'Sicherheit.php';
include "Funktionen.php";
getNavbar();

?>
<br>
	<br>
	<div id="NeuesGericht" class="container-fluid text-center w3-margin">

		<div class="w3-row-padding w3-padding-16 w3-center w3-margin">
			<form method="POST" action="GerichtHinzufuegen.php">
				Produkt-Bezeichnung<br> <input type="text" name="bezeichnung"
					value=""><br> Produkt-Beschreibung:<br> <input type="text"
					name="beschreibung" value=""><br> Produkt-Preis:<br> <input
					type="text" name="preis" value=""><br> Katgorie:<br> <select
					name="kategorie">
					<option>Vorspeisen</option>
					<option>Salate</option>
					<option>Pasta</option>
					<option>Pizza</option>
					<option>Fleisch</option>
					<option>Fisch</option>
					<option>Dessert</option>
					<option>Getraenk</option>
				</select> <br> Bildadresse:<br> <input type="text" name="bild"
					value="..\img\xyz.jpg"><br>
				<br> <input type="submit" name="newitem" value="Hinzuf&uuml;gen"
					class="w3-button w3-blue">
			</form>

		</div>
	</div>
</body>


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


</html>