<!DOCTYPE html>
<html>
<?php 
include "Funktionen.php";
?>
<head>

  <title>Mitarbeiter-Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="..\css\style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
 </head>

<body id="Login">


<div class="container text-center">
	
<br>
<br>


<h2><b> Herzlich Willkommen im Restaurant <?php echo getRestaurantName(); ?></b></h2>
<h3> Bitte melden Sie sich an oder fahren Sie als Gast fort, um ganz bequem eine Bestellung abzugeben!</h3>
<br>
<img src="..\img\Logo.jpg" width="30%"></img>

<br>
<br>

</div>


<form class="form-horizontal text-left" method="POST" action="EinloggenMitarbeiter.php"> 
	Benutzername: 
	<br>
	<input type="text" name="user" size="40">
	<br> 
	Passwort: 
	<br>
	<input type="password" name="pass" size="40">
	<br> 
	<input id="button" type="submit" name="login" value="Log-In">
	<button class="btn btn-default"><a href="Login.php">Zur&uuml;ck</a></button> 
</form>




</body>
</html>
