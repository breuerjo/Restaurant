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
include "Funktionen.php";

if( isset($_COOKIE["mitarbeiter_benutzername"]) AND isset($_COOKIE["mitarbeiter_passwort"]) ){
    include 'NavbarMitarbeiter.php';
}
else{
    include 'Navbar.php';

}

//holen wir uns mal einfach alle mitarbeiter


function getMitarbeiter($restaurant = 1) {
  $counter=0;  
  $pdo = new PDO('mysql:host=localhost;dbname=restaurant_db;charset=utf8', 'root', '');
  $statement = $pdo->prepare("SELECT * FROM `mitarbeiter` WHERE restaurant_id = :rst");
  $statement->execute(array(":rst" => $restaurant));

  while($mitarbeiter = $statement->fetch()) {     //fetch gibt mir immer ein Ergebnis
      
      if($counter %4 ==0 && $counter != 0){
          echo  '</div><div class="w3-row-padding w3-padding-16 w3-center">';
          
      }
      else if($counter %4 ==0 && $counter == 0){
          echo  '<div class="w3-row-padding w3-padding-16 w3-center">';
          
      }
      echo    '<div class="w3-quarter">
                 
                        <h3>',$mitarbeiter['mitarbeiter_name'],'</h3>
                        <p>',$mitarbeiter['mitarbeiter_beruf'],'</p>
                        </div>';
      $counter++;
  }
  echo  '</div>';
      
      
      //hier kann der tim dann seine bezaubernde tabelle draus machen
      //print_r($mitarbeiter);
  }
?>

<br>
<br>



<!--  <div id="Mitarbeiter" class="container-fluid text-center">
<br>
	<h1 id="TablleMitarbeiter"><b>Mitarbeiterübersicht</b></h1>
</div>
<br>
<br>

      getMitarbeiter(1);


<table id="Mitarbeiterübersicht_Tabelle">
  <tr>
    <th>Firstname</th>
    <th>Lastname</th> 
    <th>Age</th>
  </tr>
  <tr>
    <td>Jill</td>
    <td>Smith</td>
    <td>50</td>
  </tr>
  <tr>
    <td>Eve</td>
    <td>Jackson</td>
    <td>94</td>
  </tr>
  <tr>
    <td>John</td>
    <td>Doe</td>
    <td>80</td>
  </tr>
    <tr>
    <td>John</td>
    <td>Doe</td>
    <td>80</td>
  </tr>
    <tr>
    <td>John</td>
    <td>Doe</td>
    <td>80</td>
  </tr>
    <tr>
    <td>John</td>
    <td>Doe</td>
    <td>80</td>
  </tr>
    <tr>
    <td>John</td>
    <td>Doe</td>
    <td>80</td>
  </tr>
</table> -->


<br>
<br>
<br>
<?php getMitarbeiter(); ?>




<!--  <footer id="Footer_index" class="container-fluid bg-4 text-center navbar-fixed-bottom">
<br>
  <p><a href="Impressum.php"><b>Impressum</b></a></p> 
</footer>


 Christinas Version
<div class="navbar navbar-inverse navbar-fixed-bottom" role="navigation">
        <div class="container">
            <div class="navbar-text pull-left">
                <p>� 2018 Restaurant Pl�ck</p>
            </div>
            <div class="navbar-text pull-right">
                <a href="impressum.html">Impressum</a>      
            </div>
        </div>
    </div>-->


</body>

<footer class="container-fluid md-12 text center navbar-fixed-bottom">
  	<div class="col-md-4 navbar-text pull-left"><p><a href="Impressum.php"><b>Impressum</b></a></p></div> 
  	<div class="col-md-4 navbar-text pull-right"><p><a href="Impressum.php"><b>Datenschutz</b></a></p></div>
</footer>

</html>