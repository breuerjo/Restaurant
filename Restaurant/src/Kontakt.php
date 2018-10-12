<!DOCTYPE html>
<html lang="en">
<head>

<title>Kontakt</title>
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

getNavbar();

function printImage()
{
    $my_img = imagecreate(235, 80);
    //$background = imagecolorallocate($my_img, 161, 237, 184);
    $text_colour = imagecolorallocate($my_img, 0, 0, 0);
    $line_colour = imagecolorallocate($my_img, 235, 236, 235);
    imagestring($my_img, 4, 30, 25, "bella.espana@example", $text_colour);
    imagesetthickness($my_img, 5);
    imageline($my_img, 30, 45, 196, 45, $line_colour);

    imageline($my_img, 0, 5, 235, 5, $line_colour); // oben
    imageline($my_img, 5, 0, 5, 80, $line_colour); // links
    imageline($my_img, 230, 0, 230, 80, $line_colour); // unten
    imageline($my_img, 0, 75, 230, 75, $line_colour); // rechts

    // header( "Content-type: image/png" );
    // Bild ausgeben
    imagepng($my_img, "email-image.png");

    echo "<img src='email-image.png'>";

    // Bilddaten zurücksetzen
    imagedestroy($my_img);
}
?>

<br>
	<br>
	<br>

	<div id="Kontakt-Text" class="container-fluid text-center">
		<br>
		<h1 id="Öffnungszeiten">
			<b>&Oumlffnungszeiten</b>
		</h1>
		<br>
		<p>
			<b>Montag</b>: 15:00 - 22:30 Uhr<br> <b>Dienstag</b>: 15:00 - 22:30
			Uhr<br> <b>Mittwoch</b>: 14:30 - 22:00 Uhr <br> <b>Donnerstag</b>:
			Ruhetag<br> <b>Freitag</b>: 14:00 - 23:00 Uhr<br> <b>Samstag</b>:
			12:00 - 23:30 Uhr<br> <b>Sonntag</b>: 12:00 - 23:00 Uhr<br>
		</p>

		<br> <br>
		<h1 id="Anfahrt">
			<b>So finden Sie uns!</b>
		</h1>
		<br>
		<p>
			Italienstra&szlige 5<br> 12345 Beispielstadt<br> Fon +49
			(0)1234/5678910<br>
	<?php printImage()?>
	<br> <br>
		</p>

		<iframe
			src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d22696.54996147249!2d8.625905676389774!3d49.302852480645186!2m3!1f0!2f0!3f0!3m
			2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4797be962f38a76b%3A0x8b82e43834c40069!2sM%C3%BChlweg+20%2C+69190+Walldorf!5e0!3m
			2!1sde!2sde!4v1538299895237"
			width="600" height="450"></iframe>

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