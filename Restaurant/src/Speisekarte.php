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



   <?php 
   
   include "Funktionen.php";
   
   session_start();
   if(isset($_SESSION['mitarbeiter_benutzername'])) {
       include 'NavbarMitarbeiter.php';
   }
   else{
       include 'Navbar.php';
   }
    
    header("Content-Type: text/html; charset=utf-8");

    function getKundenId(){
        if( isset($_GET['kunde']) ){
            return $_GET['kunde'];
        }
        //else er hat was falsch gemacht
        return 0;  
    }
    function getGerichte($kategorie) {
        $pdo = new PDO('mysql:host=localhost;dbname=restaurant_db;charset=utf8', 'root', '');
        $statement = $pdo->prepare("SELECT * FROM `gericht` WHERE `gericht_kategorie` = :kategorie");
        $statement->execute(array(":kategorie" => $kategorie));
        $counter=0;
        while($gericht = $statement->fetch()) {     //fetch gibt mir immer ein Ergebnis
    
            if($counter %4 ==0 && $counter != 0){
                echo  '</div><div class="w3-row-padding w3-padding-16 w3-center">';
                
            }
            else if($counter %4 ==0 && $counter == 0){
                echo  '<div class="w3-row-padding w3-padding-16 w3-center">';
                
            }
            //Wenn Mitarbeiter => Button f�r Warenkorb entfernen
            if(!isset($_SESSION['mitarbeiter_benutzername'])) {
                 echo    '<div class="w3-quarter">
                            <img src=',$gericht['gericht_bildadresse'],' alt="Bild" style="width:100%" height="200px">
                            <h3>',$gericht['gericht_bezeichnung'],'</h3>
                            <p>',$gericht['gericht_beschreibung'],'</p>
                            <p>',$gericht['gericht_preis'],'&euro;</p>
                            <button class="btn btn-default" onclick="warenkorbHinzu(', $gericht['gericht_id'], ', ', getKundenId(), ')">In den Warenkorb</button>
                            </div>';
            }
            else{
                echo    '<div class="w3-quarter">
                            <img src=',$gericht['gericht_bildadresse'],' alt="Bild" style="width:100%">
                            <h3>',$gericht['gericht_bezeichnung'],'</h3>
                            <p>',$gericht['gericht_beschreibung'],'</p>
                            <p>',$gericht['gericht_preis'],'&euro;</p>
                            </div>';
            }
               
            $counter++;
        }
        echo  '</div>';
    }
    
    ?>


<script type="text/javascript">
function warenkorbHinzu(gericht_id, kunde_id){
    jQuery.ajax({
        url: "Bestellen_Script.php",
        type: "POST",
        data: "gericht=" + gericht_id + "&kunde=" + kunde_id,
        success: function(){
            //hier könnte man noch auf dem ui anzeigen, was wv hinzugefügt wurde
        }
    });
}
</script>

<br>
<br>
<div id="karte" class="container-fluid text-center">
<br>
	<h1 id="Speisen"><b>Unsere Speisen</b></h1>
	<br>
	<p id="Speisen-Text">Hier finden Sie eine Vielzahl der Speisen, die wir derzeit für Sie im Angebot haben. Bei Fragen wenden Sie 
		sich bitte an das Personal.<br> Viel Vergnügen wünscht ihnen...!</p>
		
</div>


<div class="w3-main w3-content w3-padding" style="max-width:1200px;margin-top:30px">    <!--Hier fangen die ..\img mit Text an -->
	
	<div class="text-center">										
	<br><br>
	<h2><b>Vorspeisen</b></h2>	
  	</div>
	<?php getGerichte("Vorspeisen"); ?>
	
	<div class="text-center">										
	<br><br>
	<h2><b>Salate</b></h2>	
  	</div>
	<?php getGerichte("Salate"); ?>
	
	<div class="text-center">										
	<br><br>
	<h2><b>Pasta</b></h2>	
  	</div>
	<?php getGerichte("Pasta"); ?>
	
	<div class="text-center">										
	<br><br>
	<h2><b>Pizza</b></h2>	
  	</div>
	<?php getGerichte("Pizza"); ?>
	
	<div class="text-center">										
	<br><br>
	<h2><b>Desserts</b></h2>	
  	</div>
	<?php getGerichte("Dessert"); ?>
	
	<div class="text-center">										
	<br><br>
	<h2><b>Getr&auml;nke</b></h2>	
  	</div>
	<?php getGerichte("Getraenk"); ?>
    

	<div class="w3-row-padding w3-padding-16 w3-center w3-margin-top" >
	<?php 
	
		if(!isset($_SESSION['mitarbeiter_benutzername'])) {
			echo '<a href="Warenkorb.php?kunde=',getKundenId() ,' "><Button class="w3-button w3-blue">Zum Warenkorb</Button></a>';
		}
		else{
		    echo '<a href="NeuesGericht.php"><Button class="w3-button w3-blue">Neues Gericht hinzuf&uuml;gen</Button></a>';
		}
	?>	
	</div>
	
	<br>
	<br>
	<br>
	
 </div> 
</body>


<footer class="container-fluid md-12 text center navbar-fixed-bottom">
  	<div class="col-md-4 navbar-text pull-left"><p><a href="Impressum.php"><b>Impressum</b></a></p></div> 
  	<div class="col-md-4 navbar-text pull-right"><p><a href="Impressum.php"><b>Datenschutz</b></a></p></div>
</footer>


</html>