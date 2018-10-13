<!DOCTYPE>
<html>

<head>


<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="..\css\bootstrap.min.css">
<link rel="stylesheet" href="..\css\style.css">
<link rel="stylesheet" href="..\css\w3.css">
<script src="..\js\bootstrap.min.js"></script>
<script src="..\js\jquery.min.js"></script>
</head>


<?php
session_start();
$user_id = $_POST['user'];
$user_pw = $_POST['pass'];

$pdo = new PDO('mysql:host=localhost;dbname=restaurant_db;charset=utf8', 'root', '');
$statement = $pdo->prepare('SELECT * FROM `mitarbeiter` WHERE `mitarbeiter_benutzername` = :id');
$statement->execute(array(
    ':id' => $user_id
));
$row = $statement->fetch();

if (! empty($row['mitarbeiter_benutzername']) and ! empty($row['mitarbeiter_passwort'] and password_verify($user_pw, $row['mitarbeiter_passwort']))) {
    $_SESSION['mitarbeiter_benutzername'] = $row['mitarbeiter_benutzername'];

    header('location: Speisekarte.php');
    // echo '<div class="w3-row-padding w3-padding-16 w3-center w3-margin-top">Login erfolgreich mit dem Benutzernamen: ', $_SESSION["mitarbeiter_benutzername"], '<br>
    // <br><button class="w3-button w3-blue"><a href="Startseite.php">Weiter zur Startseite</a></button></div>';
} else {
    echo '<div class="w3-row-padding w3-padding-16 w3-center w3-margin-top">Falscher Benutzername oder Passwort <br> 
                <br><button class="w3-button w3-red"><a href="Mitarbeiter-Login.php">Zur&uuml;ck zum Login</a></button></div>';
}

?>



<body>


</body>

</html>



