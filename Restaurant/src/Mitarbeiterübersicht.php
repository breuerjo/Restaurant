<!DOCTYPE html>
<html lang="en">
<head>

  <title>Mitarbeiterübersicht</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="..\css\style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
  
<body id="Mitarbeiterübersicht" data-spy="scroll" data-target=".navbar" data-offset="50">

<?php 
session_start();
include 'Sicherheit.php';
include "Funktionen.php";
getNavbar();

//holen wir uns mal einfach alle mitarbeiter


function getMitarbeiter($restaurant = 1) {
  $counter=0;  
  $pdo = new PDO('mysql:host=localhost;dbname=restaurant_db;charset=utf8', 'root', '');
  $statement = $pdo->prepare("SELECT * FROM `mitarbeiter` WHERE restaurant_id = :rst");
  $statement->execute(array(":rst" => $restaurant));

  while($mitarbeiter = $statement->fetch()) {     //fetch gibt mir immer ein Ergebnis
      
      if($counter %4 ==0 && $counter != 0){
          echo  '<div class="w3-container w3-padding-64 w3-center" id="Wir">';
          
      }
      else if($counter %4 ==0 && $counter == 0){
          echo  '<div class="w3-container w3-padding-64 w3-center w3-margin-top" id="Wir">';
          
      }
      echo    '<div class="w3-quarter">
                        <img src=',$mitarbeiter['mitarbeiter_bildadresse'],' alt="Bild" style="width:45%" class="w3-circle w3-hover-opacity">
                        <h3>',$mitarbeiter['mitarbeiter_name'],'</h3>
                        <p>',$mitarbeiter['mitarbeiter_beruf'],'</p><br><br>
                        </div>';
      $counter++;
  }
  echo  '</div>';
      
      
      //print_r($mitarbeiter);
  }
?>

<br>
<br>
<div id="Wir" class="container-fluid text-center">
<br>
	<h1 id="WirWir"><b>Das sind wir!</b></h1>
	<br>
		
</div>
<br>
<?php getMitarbeiter(); ?>


</body>

<footer class="container-fluid md-12 text center navbar-fixed-bottom">
  	<div class="col-md-2 navbar-text pull-left"><p><a href="Impressum.php"><b>Impressum</b></a></p></div>
  	<div id="testDiv" class="col-md-7 navbar-text pull-left"><p><b></b></p></div> 
  	<div class="col-md-2 navbar-text pull-right"><p><a href="Kontakt.php"><b>Kontakt</b></a></p></div>
</footer>

<script>
$.ajax({ url: 'http://localhost/RestaurantJava/Besucherklicker?login=0',
	dataType: 'html',
	success: function(response)
	{ $('#testDiv').html(response); }
	});
</script>


</html>