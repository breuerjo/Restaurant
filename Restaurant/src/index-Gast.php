<!DOCTYPE html>
<html>
<head>

  <title>HOMEPAGE RESTAURANT</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="..\css\style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
  
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  
 </head>
  
<body id="Startseite" data-spy="scroll" data-target=".navbar" data-offset="50">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a id="restaurant-name" class="navbar-brand" href="#Startseite"><b>Restaurantname</b></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#Startseite">HOME</a></li>
        <li><a href="Speisekarte2.html">Unsere Speisen</a></li>
        <li><a href="Kontakt.html">Kontakt</a></li>
        <li><a href="Buffet.html">Buffet/Preise</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">besondere Events
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Hochzeit</a></li>
            <li><a href="#">Geburtstag</a></li>
            <li><a href="#">Konfirmation/Kommunion</a></li> 
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>

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
        <img src="Bilder\restaurantBild.jpg" alt="Unsere Spezialitäten" width="1200" height="700">
        <div class="carousel-caption">
          <h1>Herzlich Willkommen auf unsere Homepage!</h1>
          <h2>Wir freuen uns über ihren Besuch!</h2>
		  <h2>Möchten Sie etwas bestellen? Klicken Sie <a href="Speisekarte2.html">Hier</a></h2>
        </div>      
      </div>

      <div class="item">
        <img src="Bilder\pizza.jpg" alt="Unsere Spezialitäten" width="1200" height="700">
        <div class="carousel-caption">
          <h1>Herzlich Willkommen auf unsere Homepage!</h1>
          <h2>Wir freuen uns über ihren Besuch!</h2>
		  <h2>Möchten Sie etwas bestellen? Klicken Sie <a href="Speisekarte2.html">Hier</a></h2>
        </div>      
      </div>
    
      <div class="item">
        <img src="Bilder\wein.jpg" alt="Unsere Spezialitäten" width="1200" height="700">
        <div class="carousel-caption">
          <h1>Herzlich Willkommen auf unsere Homepage!</h1>
          <h2>Wir freuen uns über ihren Besuch!</h2>
		  <h2>Möchten Sie etwas bestellen? Klicken Sie <a href="Speisekarte2.html">Hier</a></h2>
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
      <button class="btn btn-default btn-lg"><a href="Speisekarte2.html">Speisekarte</a></button>
    </div>
    <div class="col-sm-5">
      <img src="Bilder\essen2.jpg" width="500" height="300"></img>
    </div>
  </div>
</div>

<br>
<br>
<br>

<div id="Cocktails" class="container-fluid">			<!--auf der Startseite für Cocktails-->
  <div class="row">
     <div class="col-sm-5">
      <img src="Bilder\cocktails.jpg" width="500" height="300"></img>
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
      <button class="btn btn-default btn-lg"><a href="Speisekarte2.html">Speisekarte</a></button>
    </div>
    <div class="col-sm-5">
      <img src="Bilder\dessert_Startseite.jpg" width="500" height="300"></img>
    </div>
  </div>
</div>



<br>
<br>
<br>

<footer id="Footer_index" class="container-fluid bg-4 text-center">
<br>
  <p><a href="Impressum.html"><b>Impressum</b></a></p> 
</footer>


</body>
</html>
