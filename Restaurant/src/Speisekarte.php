<!DOCTYPE html>
<html>

<head>

<title>Speisekarte</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="..\css\bootstrap.min.css">
<link rel="stylesheet" href="..\css\style.css">
<link rel="stylesheet" href="..\css\w3.css">
<script src="..\js\bootstrap.min.js"></script>
<script src="..\js\jquery.min.js"></script>

</head>

<body id="Speisekarte" data-spy="scroll" data-target=".navbar"
	data-offset="50">

<?php
session_start();
include 'Sicherheit.php';
include "Funktionen.php";
getNavbar();

header("Content-Type: text/html; charset=utf-8");

function getGerichte($kategorie)
{
    $pdo = new PDO('mysql:host=localhost;dbname=restaurant_db;charset=utf8', 'root', '');
    $statement = $pdo->prepare("SELECT * FROM `gericht` WHERE `gericht_kategorie` = :kategorie");
    $statement->execute(array(
        ":kategorie" => $kategorie
    ));
    $counter = 0;
    while ($gericht = $statement->fetch()) { // fetch gibt mir immer ein Ergebnis

        if ($counter % 4 == 0 && $counter != 0) {
            echo '</div><div class="w3-row-padding w3-padding-16 w3-center">';
        } else if ($counter % 4 == 0 && $counter == 0) {
            echo '<div class="w3-row-padding w3-padding-16 w3-center">';
        }

        if (! isset($_SESSION['mitarbeiter_benutzername'])) {
            echo '<div class="w3-quarter">
                            <img src=', $gericht['gericht_bildadresse'], ' alt="Bild" style="width:100%" height="200px">
                            <h3>', $gericht['gericht_bezeichnung'], '</h3>
                            <p>', $gericht['gericht_beschreibung'], '</p>
                            <p>', $gericht['gericht_preis'], '&euro;</p>
                            <p>', "Zubereitungsdauer: ", $gericht['gericht_dauer'], " min", '</p>
                            <button class="btn btn-default" onclick="warenkorbHinzu(', $gericht['gericht_id'], ', ', getKundenId(), ')">In den Warenkorb</button>
                            </div>';
        } // Wenn Mitarbeiter
        else {
            echo '<div class="w3-quarter">
                            <img src=', $gericht['gericht_bildadresse'], ' alt="Bild" style="width:100%" height = "200px">
                            <h3>', $gericht['gericht_bezeichnung'], '</h3>
                            <p>', $gericht['gericht_beschreibung'], '</p>
                            <p>', $gericht['gericht_preis'], '&euro;</p>
                            <p>', "Zubereitungsdauer: ", $gericht['gericht_dauer'], " min", '</p>
                            </div>';
        }

        $counter ++;
    }
    echo '</div>';
}

?>

<script type="text/javascript">
function warenkorbHinzu(gericht_id, kunde_id){
    jQuery.ajax({
        url: "Bestellen_Script.php",
        type: "POST",
        data: "gericht=" + gericht_id + "&kunde=" + kunde_id,
        success: function(){
        }
    });
}
</script>

	<br>
	<br>
	<div id="karte" class="container-fluid text-center">
		<br>
		<h1 id="Speisen">
			<b>Unsere Speisen</b>
		</h1>
		<br>
		<p id="Speisen-Text">
			Hier finden Sie eine Vielzahl der Speisen, die wir derzeit für Sie
			im Angebot haben. Bei Fragen wenden Sie sich bitte an das Personal.<br> Viel Vergnügen wünscht ihnen <?php echo getRestaurantName()?>!</p>

	</div>


	<div class="w3-main w3-content w3-padding"
		style="max-width: 1200px; margin-top: 30px">

		<div class="text-center">
			<br> <br>
			<h2>
				<b>Vorspeisen</b>
			</h2>
		</div>
	<?php getGerichte("Vorspeisen"); ?>
	
	<div class="text-center">
			<br> <br>
			<h2>
				<b>Salate</b>
			</h2>
		</div>
	<?php getGerichte("Salate"); ?>
	
	<div class="text-center">
			<br> <br>
			<h2>
				<b>Pasta</b>
			</h2>
		</div>
	<?php getGerichte("Pasta"); ?>
	
	<div class="text-center">
			<br> <br>
			<h2>
				<b>Pizza</b>
			</h2>
		</div>
	<?php getGerichte("Pizza"); ?>
	
	<div class="text-center">
			<br> <br>
			<h2>
				<b>Fleisch</b>
			</h2>
		</div>
	<?php getGerichte("Fleisch"); ?>
	
	<div class="text-center">
			<br> <br>
			<h2>
				<b>Fisch</b>
			</h2>
		</div>
	<?php getGerichte("Fisch"); ?>
	
	<div class="text-center">
			<br> <br>
			<h2>
				<b>Desserts</b>
			</h2>
		</div>
	<?php getGerichte("Dessert"); ?>
	
	<div class="text-center">
			<br> <br>
			<h2>
				<b>Getr&auml;nke</b>
			</h2>
		</div>
	<?php getGerichte("Getraenk"); ?>
    

	<div class="w3-row-padding w3-padding-16 w3-center w3-margin-top">
	<?php

if (! isset($_SESSION['mitarbeiter_benutzername'])) {
    echo '<a href="Warenkorb.php"><Button class="w3-button w3-blue">Zum Warenkorb</Button></a>';
} else {
    echo '<a href="NeuesGericht.php"><Button class="w3-button w3-blue">Neues Gericht hinzuf&uuml;gen</Button></a>';
}
?>	
	</div>

		<br> <br> <br>

	</div>
</body>


<footer class="container-fluid md-12 text center navbar-fixed-bottom">
	<div class="col-md-2 navbar-text pull-left">
		<p>
			<a href="Impressum.php"><b>Impressum/Datenschutz</b></a>
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