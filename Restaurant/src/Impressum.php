<!DOCTYPE html>
<html lang="en">
<head>

<title>Impressum</title>
<meta charset="UTF-8">
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
session_start();
include "Funktionen.php";

getNavbar();

function printImage()
{
    $my_img = imagecreate(235, 80);
    $background = imagecolorallocate($my_img, 161, 237, 184);
    $text_colour = imagecolorallocate($my_img, 0, 0, 0);
    $line_colour = imagecolorallocate($my_img, 235, 236, 235);
    imagestring($my_img, 4, 30, 25, "bella.espana@example", $text_colour);
    imagesetthickness($my_img, 5);
    imageline($my_img, 30, 45, 196, 45, $line_colour);

    imageline($my_img, 0, 5, 235, 5, $line_colour); // oben
    imageline($my_img, 5, 0, 5, 80, $line_colour); // links
    imageline($my_img, 230, 0, 230, 80, $line_colour); // unten
    imageline($my_img, 0, 75, 230, 75, $line_colour); // rechts


    // Bild ausgeben
    imagepng($my_img, "email-image.png");

    echo "<img src='email-image.png'>";

    // Bilddaten zur�cksetzen
    imagedestroy($my_img);
}

?>
	<br>

	<div id="Impressum-Text" class="container-fluid text-center">
		<br>
		<h1 id="Impressum1">
			<b>Impressum</b>
		</h1>
		<br>
		<p>
			Anbieter:<br> Max Mustermann<br> Musterstraße 1<br> 80999 München<br>
			<br> <br> Kontakt:<br> Telefon: 089/1234567-8<br> Telefax:
			089/1234567-9<br> E-Mail: <br> <br>
		<?php printImage();?>
		<br> <br> Website: www.mustermann.de<br> <br> Bei redaktionellen
			Inhalten:<br> <br> Verantwortlich nach § 55 Abs.2 RStV<br> Moritz
			Schreiberling<br> Musterstraße 2<br> 80999 München
		</p>
		
		<?php include 'Datenschutz.php' ?>

	</div>
	
	<br>
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