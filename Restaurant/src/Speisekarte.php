<!DOCTYPE html>
<html>
<head>


  <title>Speisekarte</title>
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

<body id="Speisekarte" data-spy="scroll" data-target=".navbar" data-offset="50">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span id="Navbar1"class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a id="restaurant-name" class="navbar-brand" href="#Speisekarte"><b>Restaurantname</b></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="index.php">HOME</a></li>
        <li><a href="#Speisekarte">Unsere Speisen</a></li>
        <li><a href="Kontakt.php">Kontakt</a></li>
        <li><a href="Buffet.php">Buffet/Preise</a></li>
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

<br>
<br>
<div id="karte" class="container-fluid text-center">
<br>
	<h1 id="Speisen"><b>Unsere Speisen</b></h1>
	<br>
	<p id="Speisen-Text">Hier finden Sie eine Vielzahl der Speisen, die wir derzeit für Sie im Angebot haben. Bei Fragen wenden Sie 
		sich bitte an das Personal.<br> Viel Vergnügen wünscht ihnen...!</p>
	
	<br>
	<br>
	<h2><b>Hauptspeisen</b></h2>	
	
</div>


<div class="w3-main w3-content w3-padding" style="max-width:1200px;margin-top:30px">    <!--Hier fangen die ..\img mit Text an -->


  <div class="w3-row-padding w3-padding-16 w3-center" id="food">						<!--Erste Reihe für Hauptgang-->
    <div class="w3-quarter">
      <img src="..\img\pasta.jpg" alt="Pasta" style="width:100%">
      <h3>The Perfect Sandwich, A Real NYC Classic</h3>
      <p>Just some random text, lorem ipsum text praesent tincidunt ipsum lipsum.</p>
	  <button class="btn btn-default">Bestellen</button>
    </div>
    <div class="w3-quarter">
      <img src="..\img\pizza.jpg" alt="Pizza" style="width:100%">
      <h3>Let Me Tell You About This Steak</h3>
      <p>Once again, some random text to lorem lorem lorem lorem ipsum text praesent tincidunt ipsum lipsum.</p>
	  <button class="btn btn-default">Bestellen</button>
    </div>
    <div class="w3-quarter">
      <img src="..\img\pasta2.jpg" alt="Pasta" style="width:100%">
      <h3>Cherries, interrupted</h3>
      <p>Lorem ipsum text praesent tincidunt ipsum lipsum.</p>
      <p>What else?</p>
	  <button class="btn btn-default">Bestellen</button>
    </div>
    <div class="w3-quarter">
      <img src="..\img\pizza2.jpg" alt="Pizza" style="width:100%">
      <h3>Once Again, Robust Wine and Vegetable Pasta</h3>
      <p>Lorem ipsum text praesent tincidunt ipsum lipsum.</p>
	  <button class="btn btn-default">Bestellen</button>
    </div>
  </div>
  
  
 <div class="w3-row-padding w3-padding-16 w3-center">									<!--Zweite Reihe für Hauptgang-->
    <div class="w3-quarter">
      <img src="..\img\lachs_neu.jpg" alt="Pizza" style="width:100%">
      <h3>All I Need Is a Popsicle</h3>
      <p>Lorem ipsum text praesent tincidunt ipsum lipsum.</p>
	  <button class="btn btn-default">Bestellen</button>
    </div>
    <div class="w3-quarter">
      <img src="..\img\pasta.jpg" alt="Pasta" style="width:100%">
      <h3>Salmon For Your Skin</h3>
      <p>Once again, some random text to lorem lorem lorem lorem ipsum text praesent tincidunt ipsum lipsum.</p>
	  <button class="btn btn-default">Bestellen</button>
    </div>
    <div class="w3-quarter">
      <img src="..\img\pizza2.jpg" alt="Pizza" style="width:100%">
      <h3>The Perfect Sandwich, A Real Classic</h3>
      <p>Just some random text, lorem ipsum text praesent tincidunt ipsum lipsum.</p>
	  <button class="btn btn-default">Bestellen</button>
    </div>
    <div class="w3-quarter">
      <img src="..\img\pasta2.jpg" alt="Pasta" style="width:100%">
      <h3>Le French</h3>
      <p>Lorem lorem lorem lorem ipsum text praesent tincidunt ipsum lipsum.</p>
	  <button class="btn btn-default">Bestellen</button>
    </div>
  </div> 
  
  <div class="text-center">										<!--Desserts fangen an-->
	<br>
	<br>
	<h2><b>Dessert</b></h2>	
  </div>

   <div class="w3-row-padding w3-padding-16 w3-center">			<!--..\img mit Textunterschrift für Desserts-->
    <div class="w3-quarter">
      <img src="..\img\lachs_neu.jpg" alt="Pizza" style="width:100%">
      <h3>All I Need Is a Popsicle</h3>
      <p>Lorem ipsum text praesent tincidunt ipsum lipsum.</p>
	  <button class="btn btn-default">Bestellen</button>
    </div>
    <div class="w3-quarter">
      <img src="..\img\pasta.jpg" alt="Pasta" style="width:100%">
      <h3>Salmon For Your Skin</h3>
      <p>Once again, some random text to lorem lorem lorem lorem ipsum text praesent tincidunt ipsum lipsum.</p>
	  <button class="btn btn-default">Bestellen</button>
    </div>
    <div class="w3-quarter">
      <img src="..\img\pizza2.jpg" alt="Pizza" style="width:100%">
      <h3>The Perfect Sandwich, A Real Classic</h3>
      <p>Just some random text, lorem ipsum text praesent tincidunt ipsum lipsum.</p>
	  <button class="btn btn-default">Bestellen</button>
    </div>
    <div class="w3-quarter">
      <img src="..\img\pasta2.jpg" alt="Pasta" style="width:100%">
      <h3>Le French</h3>
      <p>Lorem lorem lorem lorem ipsum text praesent tincidunt ipsum lipsum.</p>
	  <button class="btn btn-default">Bestellen</button>
    </div>
  </div> 
  
</body>


<footer class="container-fluid bg-4 text-center" width="100%">
<br>
  <p><a href="Impressum.php"><b>Impressum</b></a></p> 
</footer>


</html>