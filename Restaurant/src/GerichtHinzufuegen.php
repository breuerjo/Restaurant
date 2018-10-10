<!DOCTYPE>
<html>

<head>


<title>Neues Gericht</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="..\css\bootstrap.min.css">
<link rel="stylesheet" href="..\css\style.css">
<link rel="stylesheet" href="..\css\w3.css">
<script src="..\js\bootstrap.min.js"></script>
<script	src="..\js\jquery.min.js"></script>

</head>


<?php
session_start();
include 'Sicherheit.php';
include "Funktionen.php";
getNavbar();

function neuesGerichtHinzufuegen()
{
    $bezeichnung = $_POST['bezeichnung'];
    $beschreibung = $_POST['beschreibung'];
    $preis = $_POST['preis'];
    $kategorie = $_POST['kategorie'];
    $bild = $_POST['bild'];

    // echo $bezeichnung, ' ', $beschreibung,' ', $preis,' ', $kategorie,' ', $bild;

    $pdo = new PDO('mysql:host=localhost;dbname=restaurant_db;charset=utf8', 'root', '');
    $statement = $pdo->prepare("INSERT INTO `gericht`(`gericht_bezeichnung`, `gericht_preis`, `gericht_beschreibung`, `gericht_bildadresse`, `gericht_kategorie`) VALUES (:bezeichnung, :preis, :beschreibung, :bild, :kategorie)");
    $statement->execute(array(
        ':bezeichnung' => $bezeichnung,
        ':preis' => $preis,
        ':beschreibung' => $beschreibung,
        ':bild' => $bild,
        ':kategorie' => $kategorie
    ));
}

function printNeuesGericht()
{
    $bezeichnung = $_POST['bezeichnung'];

    $pdo = new PDO('mysql:host=localhost;dbname=restaurant_db;charset=utf8', 'root', '');
    $statement = $pdo->prepare("SELECT * FROM `gericht` WHERE `gericht_bezeichnung` = :bezeichnung");
    $statement->execute(array(
        ':bezeichnung' => $bezeichnung
    ));
    $gericht = $statement->fetch();

    echo '<div class="w3-row-padding w3-padding-16 w3-center">';
    echo '<div class="w3-center">
                            <img src=', $gericht['gericht_bildadresse'], ' alt="Bild" style="width:40%">
                            <h2>', $gericht['gericht_bezeichnung'], '</h2>
                            <p>', $gericht['gericht_beschreibung'], '</p>
                            <p>', $gericht['gericht_preis'], '&euro;</p>
                            </div>';
    echo '</div>';
}

?>



<body>
	<?php
if (isset($_POST['newitem'])) {
    neuesGerichtHinzufuegen();
    printNeuesGericht();
}
?>
</body>
<footer class="container-fluid md-12 text center navbar-fixed-bottom">
	<div class="col-md-2 navbar-text pull-left">
		<p>
			<a href="Impressum.php"><b>Impressum</b></a>
		</p>
	</div>
	<div id="testDiv" class="col-md-7 navbar-text pull-left">
		<p>
			<b></b>
		</p>
	</div>
	<div class="col-md-2 navbar-text pull-right">
		<p>
			<a href="Kontakt.php"><b>Kontakt</b></a>
		</p>
	</div>
</footer>

<script>
$.ajax({ url: 'http://localhost/RestaurantJava/Besucherklicker?login=0',
	dataType: 'html',
	success: function(response)
	{ $('#testDiv').html(response); }
	});
</script>
</html>