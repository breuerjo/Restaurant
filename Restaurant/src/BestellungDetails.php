<!DOCTYPE>
<html>
<?php 
include 'Funktionen.php';
?>

<head>


  <title>Bestellung-Details</title>
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

<body id="Bestellung-Details" data-spy="scroll" data-target=".navbar" data-offset="50" class="w3-margin-top">

<?php 
include 'Navbar.php';

function getBestellungId(){
    if( isset($_GET['bestellung_id']) ){
        return $_GET['bestellung_id'];
    }
    //else keine Bestelluns-ID in der URL
    return 0;
}

function printBestellungDetails(){
    $bestellung_id = getBestellungId();
    $pdo = new PDO('mysql:host=localhost;dbname=restaurant_db;charset=utf8', 'root', '');
    $statement = $pdo->prepare("SELECT `bestellung_id`, `name`, `tisch`, `bestellung_datum`, `bestellung_erledigt` FROM `bestellung` INNER JOIN gaeste on gaeste.id = bestellung.gast_id WHERE `bestellung_id` = :bestellung_id");
    $statement->execute(array(":bestellung_id" => $bestellung_id));
    $bestellung = $statement->fetch();
    echo        '<h3>ID: ',$bestellung['bestellung_id'],'</h3>
                    <p>Gastname: ',$bestellung['name'],'</p>
                     <p>Tisch-Nummer: ',$bestellung['tisch'],'</p>
                    <p>',$bestellung['bestellung_datum'],'</p>';
    
}

function printBestellungGerichte(){
    $bestellung_id = getBestellungId();
    $pdo = new PDO('mysql:host=localhost;dbname=restaurant_db;charset=utf8', 'root', '');
    $statement = $pdo->prepare("SELECT `gericht_bildadresse`, `gericht_bezeichnung` FROM bestellung INNER JOIN bestellung_gerichte on bestellung_gerichte.bestellung_id = bestellung.bestellung_id INNER JOIN gericht on gericht.gericht_id on bestellung_gerichte.gericht_id WHERE bestellung.bestellung_id = :bestellung_id");
    $statement->execute(array(":bestellung_id" => $bestellung_id));
    $gericht = $statement->fetch();
    $counter=0;
    
    while($gericht = $statement->fetch()) {
        
        if($counter %4 ==0 && $counter != 0){
            echo  '</div><div class="w3-row-padding w3-padding-16 w3-center">';
            
        }
        else if($counter %4 ==0 && $counter == 0){
            echo  '<div class="w3-row-padding w3-padding-16 w3-center">';
            
        }
        
        echo    '<div class="w3-quarter">
                    <img src=',$gericht['gericht_bildadresse'],' alt="Bild" style="width:100%">
                    <h3>',$gericht['gericht_bezeichnung'],'</h3>
                    <p>Menge: </p>
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
	<h1>Bestellung-Details:</h1>
</div>

<?php 
    printBestellungDetails(0);
    printBestellungGerichte();
?>


<!--  HIER BESTELLUNGENÜBERSICHT ANZEIGEN -->


</div>
</body>


<footer class="container-fluid bg-4 text-center" width="100%">
<br>
  <p><a href="Impressum.php"><b>Impressum</b></a></p> 
</footer>


</html>