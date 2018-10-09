<!DOCTYPE>
<html>

<head>


  <title>Mittarbeiter-Einloggen</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="..\css\style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

</head>


<?php
if (!isset($_SESSION['gast']) && !isset($_SESSION['mitarbeiter_benutzername'])){
    echo '<br><br><br><br><br><br>
            <div class="w3-row-padding w3-padding-16 w3-center w3-margin-top"><h1>Loggen Sie sich zuerst ein!</h1><br>
          <br><button class="w3-button w3-red"><a href="Login.php">Zum Login</a></button></div>';
    
    exit("");
}
else {
//     echo 'Session_Gast: ', $_SESSION['gast'];
//     echo '<br>';
//     echo 'Gast: ', $_COOKIE['gast'];
//     echo '<br>';
//     echo 'Mitarbeiter: ', $_SESSION['mitarbeiter_benutzername'];
}
?>



<body>
	
</body>

</html>
