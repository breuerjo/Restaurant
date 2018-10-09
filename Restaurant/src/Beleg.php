<!DOCTYPE html>
<html lang="en">
<head>

<title>Beleg</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet"
	href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="..\css\style.css">
<script
	src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script
	src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>


<body>

    <?php
    // include 'Sicherheit.php';
    include 'Funktionen.php';

    // Wenn Kunde bestellt hat => ausloggen und cookie löschen
    session_start();
    // echo $_COOKIE['gast'];
    unset($_COOKIE['gast']);
    // echo $_COOKIE['gast'];
    session_destroy();

    // header("Content-Type: text/html; charset=utf-8");
    function printAngebote()
    {
        $best = urlParameter('bestellung');

        // Bestellung-Infos holen
        $bestellung = dbQuery("SELECT * FROM bestellung WHERE bestellung_id = :bestellung", array(
            ':bestellung' => $best
        ))[0];
        // holen vom Namen und Tisch der Bestellung
        $gast = dbQuery("SELECT * FROM gaeste WHERE id = :kunde", array(
            ':kunde' => $bestellung['gast_id']
        ))[0];
        // $gast = $_COOKIE['gast'];
        // dann holen wir alle gerichte
        $gerichte = dbQuery("SELECT * FROM bestellung_gerichte INNER JOIN gericht on bestellung_gerichte.gericht_id = gericht.gericht_id WHERE bestellung_id = :bestellung", array(
            ':bestellung' => $best
        ));

        echo '<div class="w3-row-padding w3-padding-16 w3-center w3-margin">
                <h1>Name: ', $gast['name'], '</h1>
              <h3>Raum-Nummer: ', $gast['raum_id'], '</h3>
                <h3>Tisch-Nummer: ', $gast['tisch'], '</h3></div>';

        echo '<div class="w3-row-padding w3-padding-16 w3-center w3-margin">';

        foreach ($gerichte as $gericht) {
            echo '<div class="w3-quarter">
                    <img src=', $gericht['gericht_bildadresse'], ' alt="Bild" style="width:100%" height="200px">
                    <h3>', $gericht['gericht_bezeichnung'], '</h3>
                    <p>', $gericht['gericht_beschreibung'], '</p>
                    <p>', $gericht['gericht_preis'], '&euro;</p>
                    </div>';
        }
        echo '</div>';
    }

    function printDauer()
    {
        $bestelllung = $_GET['bestellung'];

        $pdo = new PDO('mysql:host=localhost;dbname=restaurant_db;charset=utf8', 'root', '');

        $statement = $pdo->prepare("SELECT SUM(gericht.gericht_dauer) FROM bestellung_gerichte INNER JOIN gericht ON gericht.gericht_id = bestellung_gerichte.gericht_id WHERE bestellung_id = :bestellung");
        $statement->execute(array(
            ':bestellung' => $bestelllung
        ));
        $row = $statement->fetch();
        $sum = $row[0];
        echo $sum;
    }

    function printPreis()
    {
        $bestelllung = $_GET['bestellung'];

        $pdo = new PDO('mysql:host=localhost;dbname=restaurant_db;charset=utf8', 'root', '');

        $statement = $pdo->prepare("SELECT SUM(gericht.gericht_preis) FROM bestellung_gerichte INNER JOIN gericht ON gericht.gericht_id = bestellung_gerichte.gericht_id WHERE bestellung_id = :bestellung");
        $statement->execute(array(
            ':bestellung' => $bestelllung
        ));
        $row = $statement->fetch();
        $sum = $row[0];
        echo $sum;
    }
    ?>

<div class="w3-row-padding w3-padding-16 w3-center">
	<?php printAngebote(); ?>
    <h3>Gesamtdauer: <?php printDauer();?> Miunten</h3>
		<div class="laden">
			<div id="ladebalken">
				<div id="time">Fertig in: <?php printDauer();?> Minuten</div>
			</div>
		</div>
		<h3>Gesamtpreis: <?php printPreis();?>&euro;</h3>
	</div>
	<div class="w3-row-padding w3-padding-16 w3-center">

		<canvas width="100px" height="100px" id="canvas1"></canvas>
		<canvas width="100px" height="100px" id="canvas2"></canvas>
		<canvas width="100px" height="100px" id="canvas3"></canvas>
	</div>

	<div class="text-center">
		<svg width="100%" height="300px">
    <g id="R1" transform="translate(250 250)"> 
      <ellipse rx="100" ry="0" opacity=".3">
      <animateTransform attributeName="transform" type="rotate" dur="7s"
				from="0" to="360" repeatCount="indefinite" />
      <animate attributeName="cx" dur="8s" values="-20; 220; -20"
				repeatCount="indefinite" />
      <animate attributeName="ry" dur="3s" values="10; 60; 10"
				repeatCount="indefinite" />
      </ellipse>
    </g>
    <use xlink:href="#R1" transform="rotate(72 390 150)" />
    <use xlink:href="#R1" transform="rotate(144 390 150)" />
    <use xlink:href="#R1" transform="rotate(216 390 150)" />
    <use xlink:href="#R1" transform="rotate(288 390 150)" />
    </svg>
	</div>


</body>

<!-- FÜR DEN LADEBALKEN -->
<script type="text/javascript">

var sekunden = <?php printDauer();?>; // Balken ist genau richtig an Dauer eines Gerichts angepasst => zwei Prozent = eine Minute real life

function zaehleDauer() {			//zwei Prozent entsprechen einer Minute real life
    if (p <99.95) {
        p = p + 0.05;				//0.1 => ein Prozent = eine Sekunde
        document.getElementById('ladebalken').style.width = p.toFixed(1) + "%";
        document.getElementById('time').innerHTML = "Ihr Essen ist zu "+p.toFixed(1) + "% fertig!";
    } else {
        window.clearInterval(intervalZaehle);
    }
}
var p = 0;
var intervalZaehle = window.setInterval('zaehleDauer()', sekunden );
</script>


<script type="text/javascript">

var canvas1 = document.getElementById("canvas1");
var canvas2 = document.getElementById("canvas2");
var canvas3 = document.getElementById("canvas3");

canvas1.onmousemove = function(e) {
	drawSmiley(canvas1, '#ff6262', true, 1);
};
canvas2.onmousemove = function(e) {
	drawSmiley(canvas2, '#ffd486', true, 2);
};
canvas3.onmousemove = function(e) {
	drawSmiley(canvas3, '#86c386', true, 3);
};

canvas1.onclick = function(e) {
	bewerten(<?php echo $_GET['bestellung'];?>, 1)
	drawSmiley(canvas1, '#ff6262', true, 1);
	canvas1.onmouseleave = null;

	canvas2.parentNode.removeChild(canvas2);
	canvas3.parentNode.removeChild(canvas3);
};
canvas2.onclick = function(e) {
	bewerten(<?php echo $_GET['bestellung'];?>, 2)
	drawSmiley(canvas2, '#ffd486', true, 2);
	canvas2.onmouseleave = null;
	canvas1.parentNode.removeChild(canvas1);
	canvas3.parentNode.removeChild(canvas3);
};
canvas3.onclick = function(e) {
	bewerten(<?php echo $_GET['bestellung'];?>, 3)
	drawSmiley(canvas3, '#86c386', true, 3);
	canvas3.onmouseleave = null;
	canvas2.parentNode.removeChild(canvas2);
	canvas1.parentNode.removeChild(canvas1);
};

canvas1.onmouseleave = function(){
  drawSmiley(canvas1, '#ff6262', false, 1);

};
canvas2.onmouseleave = function(){
  drawSmiley(canvas2, '#ffd486', false, 2);

};
canvas3.onmouseleave = function(){
  drawSmiley(canvas3, '#86c386', false, 3);

};

  drawSmiley(canvas1, '#ff6262', false, 1);
  drawSmiley(canvas2, '#ffd486', false, 2);
  drawSmiley(canvas3, '#86c386', false, 3);

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

function bewerten(bestellung_id, bew){
  jQuery.ajax({
		url: "Bewerten.php",
		type: "POST",
		data: {
			bestellung: bestellung_id,
			bewertung: bew
		},
		success: function (){
		}
  });
}
$.ajax({ url: 'http://localhost/RestaurantJava/Besucherklicker?login=0',
	dataType: 'html',
	success: function(response)
	{ $('#testDiv').html(response); }
	});
</script>
<br>
<br>
<br>
<br>
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


</html>