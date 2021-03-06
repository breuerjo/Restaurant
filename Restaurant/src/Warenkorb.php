<!DOCTYPE>
<html>

<head>


<title>Warenkorb</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="..\css\bootstrap.min.css">
<link rel="stylesheet" href="..\css\style.css">
<link rel="stylesheet" href="..\css\w3.css">
<script src="..\js\bootstrap.min.js"></script>
<script	src="..\js\jquery.min.js"></script>
</head>

<body id="Warenkorb" data-spy="scroll" data-target=".navbar"
	data-offset="50">

<?php
session_start();
include 'Sicherheit.php';
include "Funktionen.php";

header("Content-Type: text/html; charset=utf-8");

getNavbar();

function printAngebote()
{ // also die aus dem warenkorb
    $pdo = new PDO('mysql:host=localhost;dbname=restaurant_db;charset=utf8', 'root', '');

    $statement = $pdo->prepare("SELECT gericht.* FROM gericht INNER JOIN warenkorb on warenkorb.gericht_id = gericht.gericht_id AND warenkorb.gast_id = :kunde");
    $statement->execute(array(
        ':kunde' => getKundenId()
    ));
    $counter = 0;
    while ($gericht = $statement->fetch()) {

        if ($counter % 4 == 0 && $counter != 0) {
            echo '</div><div class="w3-row-padding w3-padding-16 w3-center">';
        } else if ($counter % 4 == 0 && $counter == 0) {
            echo '<div class="w3-row-padding w3-padding-16 w3-center">';
        }

        echo '<div class="w3-quarter">
                    <img src=', $gericht['gericht_bildadresse'], ' alt="Bild" style="width:100%" height="200px">
                    <h3>', $gericht['gericht_bezeichnung'], '</h3>
                    <p>', $gericht['gericht_beschreibung'], '</p>
                    <p>', $gericht['gericht_preis'], '&euro;</p>
                    <p>', "Zubereitungsdauer: ", $gericht['gericht_dauer'], " min", '</p>
	                <button class="w3-button w3-red" onclick="deleteElement(', $gericht['gericht_id'], ', ', getKundenId(), ')"">Entfernen</button>
                    </div>';
        $counter ++;
    }
    if ($counter % 4 != 0) { // Reihe beenden
        echo '</div>';
    }
}

function printPreis()
{ // Gesamtpreis Warenkorb
    $pdo = new PDO('mysql:host=localhost;dbname=restaurant_db;charset=utf8', 'root', '');

    $statement = $pdo->prepare("SELECT SUM(gericht.gericht_preis) FROM gericht INNER JOIN warenkorb on gericht.gericht_id = warenkorb.gericht_id AND warenkorb.gast_id = :kunde");
    $statement->execute(array(
        ':kunde' => getKundenId()
    ));
    $row = $statement->fetch();
    $sum = $row[0];
    echo $sum;
}

function printDauer()
{ // Gesamtdauer Warenkorb
    $pdo = new PDO('mysql:host=localhost;dbname=restaurant_db;charset=utf8', 'root', '');

    $statement = $pdo->prepare("SELECT SUM(gericht.gericht_dauer) FROM gericht INNER JOIN warenkorb ON gericht.gericht_id = warenkorb.gericht_id WHERE warenkorb.gast_id = :kunde");
    $statement->execute(array(
        ':kunde' => getKundenId()
    ));
    $row = $statement->fetch();
    $sum = $row[0];
    echo $sum;
}

?>
    
    
	<script type="text/javascript">
    function deleteElement(id, kunde){
        jQuery.ajax({
            url: "Abbestellen.php",
            type: "POST",
            data: "gericht=" + id + "&kunde=" + kunde,
            success: function(){
                
        location.reload();
            }
        });
    }
    
    function bezahlen(kunde){
        jQuery.ajax({
            url: "Bezahlen.php",
            type: "POST",
            data: "kunde=" + kunde, 
            success: function(res){
              if(res == -1){
                return; //keine items
              }
                window.location.href = 'Beleg.php?bestellung=' + res;
            }
        });
        
    }
    </script>

	<br>
	<br>
	<div id="warenkorb" class="container-fluid text-center">
	
		<h1 id="Warenkorb">
			<b>Ihr Warenkorb</b>
		</h1>
		<br>
		<p id="Speisen-Text">
			Hier finden Sie Ihre gewaehlten Speisen. Zum Bestellen, drücken Sie den Button "Bezahlen oder entgültig bestellen"
			<br> Viel Vergnügen wünscht ihnen <?php echo getRestaurantName()?>!</p>
		
<?php printAngebote();?>

<div class="w3-row-padding w3-padding-16 w3-center">
			<h3>Gesamtdauer: <?php printDauer();?> Minuten</h3>
			<h3>Gesamtpreis: <?php printPreis();?>&euro;</h3>
			<Button class="w3-button w3-blue"
				onclick="bezahlen(<?php echo getKundenId();?>)">Bezahlen oder
				entg&uumlltig bestellen</Button>
		</div>

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