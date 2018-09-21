<!DOCTYPE html>
<html>
<?php 
include "Funktionen.php";
?>
<head>

  <title>Gast-Login</title>
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
<img src="..\img\Logo.jpg"></img>

<br>
<br>

</div>

<form class="form-horizontal text-left"><!-- für die Enter Taste: action="action_page.php"-->

<div class="container">
    <label><b>Username</b></label>
    <input type="text" placeholder="Geben Sie ihren Username oder E-Mail an">

    <label><b>Passwort</b></label>
    <input type="password" placeholder="Geben Sie das Passwort ein">

    <button class="btn btn-default"><a href="index-Mitarbeiter.php">Einloggen</a></button>
    <button class="btn btn-default"><a href="Login.php">Zur&uumlck</a></button>	
</div>

</form>


</body>
</html>
