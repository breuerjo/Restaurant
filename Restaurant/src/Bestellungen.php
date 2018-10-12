<!DOCTYPE>
<html>


<head>


<title>Bestellungen</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="..\css\bootstrap.min.css">
<link rel="stylesheet" href="..\css\style.css">
<link rel="stylesheet" href="..\css\w3.css">
<script src="..\js\bootstrap.min.js"></script>
<script	src="..\js\jquery.min.js"></script>
</head>

<body id="Bestellungen" data-spy="scroll" data-target=".navbar"
	data-offset="50">
	<script>
    function loeschen(id){
        jQuery.ajax({
            url: "Bestellung_loeschen.php",
            type: "POST",
            data: "bestellung_id=" + id,
            success: function(){
                
        location.reload();
            }
        });
    }
	</script>

<?php
session_start();
include 'Sicherheit.php';
include 'Funktionen.php';
getNavbar();

function printBestellungen($erledigt)
{
    $pdo = new PDO('mysql:host=localhost;dbname=restaurant_db;charset=utf8', 'root', '');
    $statement = $pdo->prepare("SELECT `bestellung_id`, `name`, `tisch`, `bestellung_datum`, `bestellung_erledigt` FROM `bestellung` INNER JOIN gaeste on gaeste.id = bestellung.gast_id WHERE `bestellung_erledigt` = :erledigt");
    $statement->execute(array(
        ":erledigt" => $erledigt
    ));
    $counter = 0;

    while ($bestellung = $statement->fetch()) {
        $bestellung_id = $bestellung['bestellung_id'];
        if ($counter % 4 == 0 && $counter != 0) {
            echo '</div><div class="w3-row-padding w3-padding-16 w3-center">';
        } else if ($counter % 4 == 0 && $counter == 0) {
            echo '<div class="w3-row-padding w3-padding-16 w3-center w3-margin">';
        }
        echo '<div class="w3-quarter">
                    <h3>ID: ', $bestellung['bestellung_id'], '</h3>
                    <p>Gastname: ', $bestellung['name'], '</p>
                     <p>Tisch-Nummer: ', $bestellung['tisch'], '</p>
                    <p>', $bestellung['bestellung_datum'], '</p>
                    <a href="BestellungDetails.php?bestellung_id=', $bestellung_id, '"><Button class="w3-button w3-blue">Zu der Bestellung</Button></a>
                    <Button class="w3-button w3-red" onclick="loeschen(', $bestellung_id, ')">L&ouml;schen</Button>
                    </div>';
        $counter ++;
    }
    if ($counter % 4 != 0) { // Reihe beenden
        echo '</div>';
    }
}
?>
<div id="bestellungen" class="container-fluid text-center w3-margin">
		<br> <br>

		<div class="w3-row-padding w3-padding-16 w3-center w3-margin">
			<h1>
				<b>Offene Bestellungen</b>
			</h1>
		</div>
<?php
printBestellungen(0);
?>

<div class="w3-row-padding w3-padding-16 w3-center w3-margin">
			<br> <br>
			<h1>
				<b>Erledigte Bestellungen</b>
			</h1>
		</div>
<?php
printBestellungen(1);
?>

	</div>

	<br>
	<br>
	<br>
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