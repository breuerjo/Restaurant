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
session_destroy();

?>


<div id="Logout" class="container-fluid text-center">
<br>
	<h1 id="Logout"><b>Logout erfolgreich</b></h1>
	<br>
	<button class="w3-button w3-red"><a href="Mitarbeiter-Login.php">Zur&uuml;ck zur Login-Seite</a></button>
	
</div>
<br>

<footer class="container-fluid md-12 text center navbar-fixed-bottom">
  	<div class="col-md-4 navbar-text pull-left"><p><a href="Impressum.php"><b>Impressum</b></a></p></div> 
  	<div class="col-md-4 navbar-text pull-right"><p><a href="Impressum.php"><b>Datenschutz</b></a></p></div>
</footer>


</body>
</html>