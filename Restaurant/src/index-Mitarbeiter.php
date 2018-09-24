<!DOCTYPE html>
<html>
<?php 
include "Funktionen.php";
?>
<head>

  <title>HOMEPAGE <?php echo getRestaurantName();?></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="..\css\style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
  
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  
 </head>
  
<body id="Startseite" data-spy="scroll" data-target=".navbar" data-offset="50">

<?php 
include 'Navbar.php';
?>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Wie sollen sich die Slides bewegen -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!--Karoussel-Inhalt-->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="..\img\restaurantBild.jpg" alt="Unsere Spezialitäten" width="1200" height="700">
        <div class="carousel-caption">
          <h1>Herzlich Willkommen auf unsere Homepage!</h1>
          <h2>Wir freuen uns über ihren Besuch!</h2>
		  <h2>Möchten Sie etwas bestellen? Klicken Sie <a href="Speisekarte.php">Hier</a></h2>
        </div>      
      </div>

      <div class="item">
        <img src="..\img\pizza.jpg" alt="Unsere Spezialitäten" width="1200" height="700">
        <div class="carousel-caption">
          <h1>Herzlich Willkommen auf unsere Homepage!</h1>
          <h2>Wir freuen uns über ihren Besuch!</h2>
		  <h2>Möchten Sie etwas bestellen? Klicken Sie <a href="Speisekarte.php">Hier</a></h2>
        </div>      
      </div>
    
      <div class="item">
        <img src="..\img\wein.jpg" alt="Unsere Spezialitäten" width="1200" height="700">
        <div class="carousel-caption">
          <h1>Herzlich Willkommen auf unsere Homepage!</h1>
          <h2>Wir freuen uns über ihren Besuch!</h2>
		  <h2>Möchten Sie etwas bestellen? Klicken Sie <a href="Speisekarte.php">Hier</a></h2>
        </div>      
      </div>
    </div>

		<!--Bewegung des Karussels-->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>

<br>
<br>
<br>
<br>

<div id="Essen" class="container-fluid">			<!--auf der Startseite für Hauptspeisen-->
  <div class="row">
    <div class="col-sm-7 text-center">
      <h2>UNSERE SPEISEN</h2><br>
      <h4>Bei uns werden alle Gerichte frisch für Sie zubereitet. Nur Zutaten aus unserer Region. Überzeugen Sie sich selbst durch einen Blick in die Speisekarte.</h4><br>
      <button class="btn btn-default btn-lg"><a href="Speisekarte.php">Speisekarte</a></button>
    </div>
    <div class="col-sm-5">
      <img src="..\img\essen2.jpg" width="500" height="300"></img>
    </div>
  </div>
</div>

<br>
<br>
<br>

<div id="Cocktails" class="container-fluid">			<!--auf der Startseite für Cocktails-->
  <div class="row">
     <div class="col-sm-5">
      <img src="..\img\cocktails.jpg" width="500" height="300"></img>
    </div>
    <div class="col-sm-6.5 text-center">
      <h2>UNSERE COCKTAILS</h2><br>
      <h4>Bei uns werden alle Gerichte frisch für Sie zubereitet. Nur Zutaten aus unserer Region. 
			Überzeugen Sie sich selbst durch einen Blick in die Speisekarte.</h4><br>
      <button class="btn btn-default btn-lg">Cocktails</button>
    </div>
 </div>
</div>

<br>
<br>
<br>

<div id="Dessert" class="container-fluid">			<!--auf der Startseite für Dessert-->
  <div class="row">
    <div class="col-sm-7 text-center">
      <h2>UNSERE DESSERTS</h2><br>
      <h4>Bei uns werden alle Gerichte frisch für Sie zubereitet. Nur Zutaten aus unserer Region. Überzeugen Sie sich selbst durch einen Blick in die Speisekarte.</h4><br>
      <button class="btn btn-default btn-lg"><a href="Speisekarte.php">Speisekarte</a></button>
    </div>
    <div class="col-sm-5">
      <img src="..\img\dessert_Startseite.jpg" width="500" height="300"></img>
    </div>
  </div>
</div>



<br>
<br>
<br>


</body>

<footer class="container-fluid md-12 text center navbar-fixed-bottom">
  	<div class="col-md-4 navbar-text pull-left"><p><a href="Impressum.php"><b>Impressum</b></a></p></div> 
  	<div class="col-md-4 navbar-text pull-right"><p><a href="Impressum.php"><b>Datenschutz</b></a></p></div>
</footer>
</html>
