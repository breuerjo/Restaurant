<!DOCTYPE>
<html>
<?php 
include 'Funktionen.php';
?>

<head>


  <title>Bestellungen</title>
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

<body id="Bestellungen" data-spy="scroll" data-target=".navbar" data-offset="50">

<?php 
include 'Navbar.php';

function printBestellungen($erledigt){
    $pdo = new PDO('mysql:host=localhost;dbname=restaurant_db;charset=utf8', 'root', '');
    $statement = $pdo->prepare("SELECT `bestellung_id`, `name`, `tisch`, `bestellung_datum`, `bestellung_erledigt` FROM `bestellung` INNER JOIN gaeste on gaeste.id = bestellung.gast_id WHERE `bestellung_erledigt` = :erledigt");
    $statement->execute(array(":erledigt" => $erledigt));
    $counter=0;
    
    while($bestellung = $statement->fetch()) {
        $bestellung_id = $bestellung['bestellung_id'];
        if($counter %4 ==0 && $counter != 0){
            echo  '</div><div class="w3-row-padding w3-padding-16 w3-center">';
        }
        else if($counter %4 ==0 && $counter == 0){
            echo  '<div class="w3-row-padding w3-padding-16 w3-center w3-margin">';
        }
        echo    '<div class="w3-quarter">
                    <h3>ID: ',$bestellung['bestellung_id'],'</h3>
                    <p>Gastname: ',$bestellung['name'],'</p>
                     <p>Tisch-Nummer: ',$bestellung['tisch'],'</p>
                    <p>',$bestellung['bestellung_datum'],'</p>
                    <a href="BestellungDetails.php?bestellung_id=', $bestellung_id,'"><Button class="w3-button w3-blue">Zu der Bestellung</Button></a>
                    </div>';
        $counter++;
        
    }
    if($counter % 4 != 0){  //Reihe beenden
        echo  '</div>';
        
    }
}
?>
<div id="bestellungen" class="container-fluid text-center w3-margin">

<div class="w3-row-padding w3-padding-16 w3-center w3-margin">
	<h1>Offene Bestellungen:</h1>
</div>
<?php 
    printBestellungen(0);
?>

<div class="w3-row-padding w3-padding-16 w3-center w3-margin">
	<h1>Erledigte Bestellungen:</h1>
</div>
<?php 
    printBestellungen(1);
?>

<!--  HIER BESTELLUNGENÜBERSICHT ANZEIGEN -->


</div>
</body>


<footer class="container-fluid bg-4 text-center" width="100%">
<br>
  <p><a href="Impressum.php"><b>Impressum</b></a></p> 
</footer>


</html>