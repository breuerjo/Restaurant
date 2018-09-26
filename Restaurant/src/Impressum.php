<!DOCTYPE html>
<html lang="en">
<head>

  <title>Impressum</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="..\css\style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
  
<body id="Impressum" data-spy="scroll" data-target=".navbar" data-offset="50">

<?php 
include "Funktionen.php";

session_start();
if(isset($_SESSION['mitarbeiter_benutzername'])) {
    include 'NavbarMitarbeiter.php';
}
else{
    include 'Navbar.php';
}

function printImage(){
    $my_img = imagecreate( 235, 80 );
    $background = imagecolorallocate( $my_img, 255, 255, 255 );
    $text_colour = imagecolorallocate( $my_img, 0, 0, 0 );
    $line_colour = imagecolorallocate( $my_img, 255, 0, 0 );
    imagestring( $my_img, 4, 30, 25, "bella.espana@gmail.de", $text_colour );
    imagesetthickness ( $my_img, 5 );
    imageline( $my_img, 30, 45, 196, 45, $line_colour );
    
    imageline( $my_img, 0, 5, 235, 5, $line_colour );//oben
    imageline( $my_img, 5, 0, 5, 80, $line_colour );//links
    imageline( $my_img, 230, 0, 230, 80, $line_colour );//unten
    imageline( $my_img, 0, 75, 230, 75, $line_colour );//rechts
    
    //header( "Content-type: image/png" );
    //Bild ausgeben
    imagepng( $my_img, "email-image.png" );
    
    echo "<img src='email-image.png'>";
    
    //Bilddaten zur�cksetzen
    imagedestroy( $my_img );
}

?>

<br>
<br>
<br>

<div id="Impressum-Text" class="container-fluid text-center">
<br>
	<h1 id="Impressum1"><b>Impressum</b></h1>
	<br>
	<p>
		Anbieter:<br>
		Max Mustermann<br>
		Musterstraße 1<br>
		80999 München<br>
		<br>
		<br>
		Kontakt:<br>
		Telefon: 089/1234567-8<br>
		Telefax: 089/1234567-9<br>
		E-Mail: <br><br>
		<?php printImage();?>
		<br><br>
		Website: www.mustermann.de<br>
		
		<br>
		Bei redaktionellen Inhalten:<br>
		<br>
		Verantwortlich nach § 55 Abs.2 RStV<br>
		Moritz Schreiberling<br>
		Musterstraße 2<br>
		80999 München
	</p>
	
</div>
<br>

<footer class="container-fluid md-12 text center navbar-fixed-bottom">
  	<div class="col-md-4 navbar-text pull-left"><p><a href="Impressum.php"><b>Impressum</b></a></p></div> 
  	<div class="col-md-4 navbar-text pull-right"><p><a href="Impressum.php"><b>Datenschutz</b></a></p></div>
</footer>




<!--<h1>Fick dich Jonas</h1>

<div id="Test">
<h2>Das ist ein Test</h2>
<button type="button" onclick="loadDoc()">Hallo</button>
</div>

<script>
function loadDoc() {

      document.getElementById("Test").innerHTML = "Test";
}
</script>
-->


</body>
</html>