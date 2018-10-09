<!DOCTYPE>
<html>

<head>


<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet"
	href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="..\css\style.css">
<script
	src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script
	src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">


</head>


<?php

session_start(); // starting the session for user profile page
$user_id = $_POST['user'];
$user_pw = $_POST['pass'];

$pdo = new PDO('mysql:host=localhost;dbname=restaurant_db;charset=utf8', 'root', '');
$statement = $pdo->prepare("SELECT * FROM mitarbeiter where mitarbeiter_benutzername = '$user_id' AND mitarbeiter_passwort = '$user_pw'");
$statement->execute(array());
$row = $statement->fetch();

if (! empty($row['mitarbeiter_benutzername']) and ! empty($row['mitarbeiter_passwort'])) {
    $_SESSION['mitarbeiter_benutzername'] = $row['mitarbeiter_benutzername'];

    header('location: Speisekarte.php');
    // echo '<div class="w3-row-padding w3-padding-16 w3-center w3-margin-top">Login erfolgreich mit dem Benutzernamen: ', $_SESSION["mitarbeiter_benutzername"], '<br>
    // <br><button class="w3-button w3-blue"><a href="Startseite.php">Weiter zur Startseite</a></button></div>';
} // COOKIE SETZEN!

else {
    echo '<div class="w3-row-padding w3-padding-16 w3-center w3-margin-top">Falscher Benutzername oder Passwort <br> 
                <br><button class="w3-button w3-red"><a href="Mitarbeiter-Login.php">Zur&uuml;ck zum Login</a></button></div>';
}

?>



<body>

</body>

</html>



