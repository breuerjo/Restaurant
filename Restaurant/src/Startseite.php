<!DOCTYPE html>
<html>

<head>
<?php
session_start();
include 'Sicherheit.php';
include "Funktionen.php";
getNavbar(getKundenId());
?>
  <title>HOMEPAGE <?php echo getRestaurantName();?></title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="..\css\bootstrap.min.css">
<link rel="stylesheet" href="..\css\style.css">
<link rel="stylesheet" href="..\css\w3.css">
<script src="..\js\bootstrap.min.js"></script>
<script	src="..\js\jquery.min.js"></script>

</head>

<body id="Startseite" data-spy="scroll" data-target=".navbar"
	data-offset="50">



	<div id="myCarousel" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1"></li>
			<li data-target="#myCarousel" data-slide-to="2"></li>
		</ol>

		<!--Karoussel-Inhalt-->
		<div class="carousel-inner" role="listbox">
			<div class="item active">
				<img src="..\img\restaurantBild.jpg" alt="Unsere Spezialitäten"
					width="1200" height="700">
				<div class="carousel-caption">
					<h1>Herzlich Willkommen auf unsere Homepage!</h1>
					<h2>Wir freuen uns über ihren Besuch!</h2>
					<h2>
						Möchten Sie etwas bestellen? Klicken Sie <a
							href="Speisekarte.php"><b>Hier</b></a>
					</h2>
				</div>
			</div>

			<div class="item">
				<img src="..\img\pizza.jpg" alt="Unsere Spezialitäten" width="1200"
					height="700">
				<div class="carousel-caption">
					<h1>Herzlich Willkommen auf unsere Homepage!</h1>
					<h2>Wir freuen uns über ihren Besuch!</h2>
					<h2>
						Möchten Sie etwas bestellen? Klicken Sie <a
							href="Speisekarte.php"><b>Hier</b></a>
					</h2>
				</div>
			</div>

			<div class="item">
				<img src="..\img\wein.jpg" alt="Unsere Spezialitäten" width="1200"
					height="700">
				<div class="carousel-caption">
					<h1>Herzlich Willkommen auf unsere Homepage!</h1>
					<h2>Wir freuen uns über ihren Besuch!</h2>
					<h2>
						Möchten Sie etwas bestellen? Klicken Sie <a
							href="Speisekarte.php"><b>Hier</b></a>
					</h2>
				</div>
			</div>
		</div>

		<!--Bewegung des Karussels-->
		<a class="left carousel-control" href="#myCarousel" role="button"
			data-slide="prev"> <span class="glyphicon glyphicon-chevron-left"
			aria-hidden="true"></span> <span class="sr-only">Previous</span>
		</a> <a class="right carousel-control" href="#myCarousel"
			role="button" data-slide="next"> <span
			class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>

	<br>
	<br>

	<div id="Essen" class="container-fluid">
		<!--auf der Startseite für Hauptspeisen-->
		<div class="row">
			<div class="col-sm-7 text-center">
				<h2>UNSERE SPEISEN</h2>
				<br>
				<h4>Bei uns werden alle Gerichte frisch für Sie zubereitet. Nur
					Zutaten aus unserer Region. Überzeugen Sie sich selbst durch einen
					Blick in die Speisekarte.</h4>
				<br> <a href="Speisekarte.php"><button
						class="btn btn-default btn-lg">Speisekarte</button></a>
			</div>
			<br>
			<div class="col-sm-5">
				<img src="..\img\essen2.jpg" width="100%" height="300"></img>
			</div>
		</div>
	</div>

	<br>
	<br>
	<br>

	<div id="Cocktails" class="container-fluid">
		<!--auf der Startseite für Cocktails-->
		<div class="row">
			<div class="col-sm-5">
				<img src="..\img\cocktails.jpg" width="100%" height="300"></img>
			</div>
			<div class="col-sm-7 text-center">
				<h2>UNSERE GETR&AumlNKE</h2>
				<br>
				<h4>W&aumlhlen Sie bei unseren Getr&aumlnken zwischen Kalt- &
					Hei&szliggetr&aumlnken. Bei unserem Bier handelt es sich um
					regionale Zubereitung. Sehen Sie sich selbst die vielf&aumlltige
					Auswahl an.</h4>
				<br> <a href="Speisekarte.php"><button
						class="btn btn-default btn-lg">Getr&aumlnke</button></a>
			</div>
		</div>
	</div>

	<br>
	<br>
	<br>

	<div id="Dessert" class="container-fluid">
		<!--auf der Startseite für Dessert-->
		<div class="row">
			<div class="col-sm-7 text-center">
				<h2>UNSERE DESSERTS</h2>
				<br>
				<h4>Genie&szligen Sie die frisch f&uumlr Sie zubereiteten Desserts.
					Alle Desserts sind Spezialit&aumlten aus dem eigenen Hause. Werfen
					Sie einen Blick auf die Speisekarte in die Dessert-Kategorie.</h4>
				<br> <a href="Speisekarte.php"><button
						class="btn btn-default btn-lg">Desserts</button></a>
			</div>
			<br>
			<div class="col-sm-5">
				<img src="..\img\dessert_Startseite.jpg" width="100%" height="300"></img>
			</div>
		</div>
	</div>

	<br>
	<br>
	<br>

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
