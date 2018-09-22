<!DOCTYPE>
<html>
<?php 
include 'Funktionen.php';
?>

<head>


  <title>Warenkorb</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="..\css\style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <!--Diese beiden sind neu-->
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
 <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Karma">-->

<script type="text/javascript" src="WarenkorbFunktionen.js"></script>
</head>

<body id="Warenkorb" data-spy="scroll" data-target=".navbar" data-offset="50">

<?php 
include 'Navbar.php';
?>

<br>
<br>

</body>
<?php 
//hier muss umwandlung js array => php
    $warenkorb = getWarenkorb();

    foreach ($warenkorb as $gericht){
        echo    '<div class="w3-quarter">
                    <img src=',$gericht['gericht_bildadresse'],' alt="Bild" style="width:100%">
                    <h3>',$gericht['gericht_bezeichnung'],'</h3>
                    <p>',$gericht['gericht_beschreibung'],'</p>
	                <button class="w3-button w3-red" onclick="warenkorbEntf(',$gericht['gericht_id'],')">In den Warenkorb</button>
                    </div>';
}
?>

<div>
	<button class="w3-button w3-blue" onclick="bestellen()">Bestellen</button>
</div>

<footer class="container-fluid bg-4 text-center" width="100%">
<br>
  <p><a href="Impressum.php"><b>Impressum</b></a></p> 
</footer>


</html>