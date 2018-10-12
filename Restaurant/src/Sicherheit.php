<!DOCTYPE>
<html>

<head>


<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="..\css\bootstrap.min.css">
<link rel="stylesheet" href="..\css\style.css">
<link rel="stylesheet" href="..\css\w3.css">
<script src="..\js\bootstrap.min.js"></script>
<script	src="..\js\jquery.min.js"></script>

</head>


<?php
if (! isset($_SESSION['gast']) && ! isset($_SESSION['mitarbeiter_benutzername'])) {
    echo '<br><br><br><br><br><br>
            <div class="w3-row-padding w3-padding-16 w3-center w3-margin-top"><h1>Loggen Sie sich zuerst ein!</h1><br>
          <br><button class="w3-button w3-red"><a href="Login.php">Zum Login</a></button></div>';

    exit("");
} else {
    //Die angrefragte Seite wird normal geladen
}
?>



<body>

</body>

</html>
