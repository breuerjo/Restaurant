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
getNavbar();

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
    $statement = $pdo->prepare("SELECT `bestellung_id`, `name`, `tisch`,`bestellung_bewertung`, `bestellung_datum`, `bestellung_erledigt` FROM `bestellung` INNER JOIN gaeste on gaeste.id = bestellung.gast_id WHERE `bestellung_id` = :bestellung_id");
    $statement->execute(array(":bestellung_id" => $bestellung_id));
    $bestellung = $statement->fetch();
    
    echo        '<h3>ID: ',$bestellung['bestellung_id'],'</h3>
                    <h3>Gastname: ',$bestellung['name'],'</h3>
                     <h3>Tisch-Nummer: ',$bestellung['tisch'],'</h3>
                    <h3>',$bestellung['bestellung_datum'],'</h3>
                    <h3>Gesamtpreis: ', printPreis(),'&euro;</h3>
                    <Button class="w3-button w3-blue" onclick="zeigeSmiley(',$bestellung['bestellung_bewertung'],')">Bewertung anzeigen!</Button><br><br>
                    <Button class="w3-button w3-blue" onclick="BestellungAbgeschlossen(',$bestellung['bestellung_id'],')">Bestellung erledigt</Button>
                    <br>
                    <canvas width="100px" height="100px" id="canvas1" ></canvas>
                    <br><br>
                    <h1>Gerichte: </h1>';
    
}

function printBestellungGerichte(){
    $bestellung_id = getBestellungId();
    $pdo = new PDO('mysql:host=localhost;dbname=restaurant_db;charset=utf8', 'root', '');
    $statement = $pdo->prepare("SELECT `gericht_bildadresse`, `gericht_preis`, `gericht_bezeichnung`, `gericht_kategorie` FROM bestellung INNER JOIN bestellung_gerichte on bestellung_gerichte.bestellung_id = bestellung.bestellung_id INNER JOIN gericht on gericht.gericht_id = bestellung_gerichte.gericht_id WHERE bestellung.bestellung_id = :bestellung_id");
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
                    <img src=',$gericht['gericht_bildadresse'],' alt="Bild" style="width:100%" height="200px">
                    <h2>',$gericht['gericht_kategorie'],'</h2>
                    <h3>',$gericht['gericht_bezeichnung'],'</h3>
                    <p>Preis: ',$gericht['gericht_preis'],'&euro;</p>
                    <p>Menge: </p>
                    </div>';
        $counter++;
        
    }
    if($counter % 4 != 0){  //Reihe beenden
        echo  '</div>';
        
    }
    
}

    function printPreis(){    //der Bestellung
        $pdo = new PDO('mysql:host=localhost;dbname=restaurant_db;charset=utf8', 'root', '');
        
        $statement = $pdo->prepare("SELECT SUM(gericht.gericht_preis) FROM gericht INNER JOIN bestellung_gerichte on gericht.gericht_id = bestellung_gerichte.gericht_id INNER JOIN bestellung on bestellung_gerichte.bestellung_id = bestellung.bestellung_id WHERE bestellung.bestellung_id = :id");
        $statement->execute(array(':id' => getBestellungId()));
        $row = $statement->fetch();
        $sum = $row[0];
        echo $sum;
        
    }
    
?>
<div id="bestellungen" class="container-fluid text-center w3-margin">

<div class="w3-row-padding w3-padding-16 w3-center w3-margin">
	<br>
	<br>
	<h1>Bestellung-Details:</h1>
</div>

<?php 
    printBestellungDetails(0);
    
    printBestellungGerichte();
?>


<!--  HIER BESTELLUNGENÜBERSICHT ANZEIGEN -->

<br>
<br>
</div>

<script type="text/javascript">
function BestellungAbgeschlossen(bestellung_id){
	jQuery.ajax({
		url:"Bestellung_entfernen.php",
		typ:"POST",
		data: "bestellung_id=" + bestellung_id,
	});   
	
}

function zeigeSmiley(bewertung){
	var canvas1 = document.getElementById("canvas1");

	if(bewertung===1){
		drawSmiley(canvas1, '#ff6262', true, bewertung);
	}
	else if(bewertung===2){
		drawSmiley(canvas1, '#ffd486', true, bewertung);
	}
	else if(bewertung===3){
		drawSmiley(canvas1, '#86c386', true, bewertung);
	}
	else{
		drawSmiley(canvas1, '#000000', false, bewertung);
	}
  		
}
function drawSmiley(canvas, color, filled, emotion){
	var ctx = canvas.getContext("2d");
	ctx.clearRect(0, 0, canvas.width, canvas.height);
	ctx.strokeStyle= color;
	ctx.beginPath();
	ctx.arc(50, 50, 40, 0, 2 * Math.PI);
	
	ctx.fillStyle = color + '00';
	if(filled){
		ctx.fillStyle = color + '55';
	}
	ctx.fill();
	ctx.stroke();
	ctx.beginPath();
	ctx.arc(50,50,40,0,2*Math.PI);
	ctx.stroke();
	ctx.beginPath();
	ctx.arc(60,30,5,0,2*Math.PI);
	ctx.stroke();
	ctx.beginPath();
	ctx.arc(40,30,5,0,2*Math.PI);
	ctx.stroke();
	ctx.beginPath();
	if(emotion===1){
		ctx.arc(50, 75, 20, 1* Math.PI, 2 * Math.PI);
	}
	else if(emotion===3){
		ctx.arc(50, 50, 20, 2* Math.PI, 1 * Math.PI);
	}
	else if(emotion===2){
		ctx.moveTo(25, 60);
		ctx.lineTo(75,60);
	}
	
	ctx.stroke();
}

</script>
</body>


<footer class="container-fluid md-12 text center navbar-fixed-bottom">
  	<div class="col-md-4 navbar-text pull-left"><p><a href="Impressum.php"><b>Impressum</b></a></p></div> 
  	<div class="col-md-4 navbar-text pull-right"><p><a href="Kontakt.php"><b>Kontakt</b></a></p></div>
</footer>


</html>