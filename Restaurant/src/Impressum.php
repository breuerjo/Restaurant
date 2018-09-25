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
		E-Mail: mail@mustermann.de<br>
		Website: www.mustermann.de<br>
		<br>
		<br>
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

<footer id="Footer_index" class="container-fluid bg-4 text-center">
<br>
  <p><a href="Impressum.php"><b>Impressum</b></a></p> 
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