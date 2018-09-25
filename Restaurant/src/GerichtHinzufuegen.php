<!DOCTYPE>
<html>

<head>


  <title>Neues Gericht</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="..\css\style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <!--Diese beiden sind neu-->
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
 <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Karma">-->

</head>


<?php 

include "Funktionen.php";

session_start();
if(isset($_SESSION['mitarbeiter_benutzername'])) {
    include 'NavbarMitarbeiter.php';
}
else{
    include 'Navbar.php';
}

function neuesGerichtHinzufuegen(){
    $bezeichnung = $_POST['bezeichnung'];
    $beschreibung = $_POST['beschreibung'];
    $preis = $_POST['preis'];
    $kategorie = $_POST['kategorie'];
    $bild = $_POST['bild'];
    
    //echo $bezeichnung, '  ', $beschreibung,'  ', $preis,'  ', $kategorie,'  ', $bild;
    
    
    $pdo = new PDO('mysql:host=localhost;dbname=restaurant_db;charset=utf8', 'root', '');
    $statement = $pdo->prepare("INSERT INTO `gericht`(`gericht_bezeichnung`, `gericht_preis`, `gericht_beschreibung`, `gericht_bildadresse`, `gericht_kategorie`) VALUES (:bezeichnung, :preis, :beschreibung, :bild, :kategorie)");
    $statement->execute(array(':bezeichnung' => $bezeichnung, ':preis' => $preis, ':beschreibung' => $beschreibung, ':bild' => $bild, ':kategorie' => $kategorie)); 
}

function printNeuesGericht(){
    $bezeichnung = $_POST['bezeichnung'];
    
    $pdo = new PDO('mysql:host=localhost;dbname=restaurant_db;charset=utf8', 'root', '');
    $statement = $pdo->prepare("SELECT * FROM `gericht` WHERE `gericht_bezeichnung` = :bezeichnung");
    $statement->execute(array(':bezeichnung' => $bezeichnung)); 
    $gericht = $statement->fetch();
    
    echo  '<div class="w3-row-padding w3-padding-16 w3-center">';
    echo    '<div class="w3-center">
                            <img src=',$gericht['gericht_bildadresse'],' alt="Bild" style="width:40%">
                            <h2>',$gericht['gericht_bezeichnung'],'</h2>
                            <p>',$gericht['gericht_beschreibung'],'</p>
                            <p>',$gericht['gericht_preis'],'&euro;</p>
                            </div>';
    echo  '</div>';
}



?>



<body>
	<?php 
	if(isset($_POST['newitem'])) {
	    neuesGerichtHinzufuegen();
	    printNeuesGericht();
	}
	 ?>
</body>
<footer class="container-fluid md-12 text center navbar-fixed-bottom">
  	<div class="col-md-4 navbar-text pull-left"><p><a href="Impressum.php"><b>Impressum</b></a></p></div> 
  	<div class="col-md-4 navbar-text pull-right"><p><a href="Impressum.php"><b>Datenschutz</b></a></p></div>
</footer>
</html>