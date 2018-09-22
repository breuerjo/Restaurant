<!DOCTYPE html>
<html>
<?php 
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
        echo    '<div class="w3-quarter">
                    <img src=',$gericht['gericht_bildadresse'],' alt="Bild" style="width:100%">
                    <h3>',$gericht['gericht_bezeichnung'],'</h3>
                    <p>',$gericht['gericht_beschreibung'],'</p>
	                <button class="btn btn-default" press="warenkorbHinzufuegen(',$gericht['gericht_id'],')">In den Warenkorb</button>
                    </div>';
        
        if($counter %4 ==0 ){
            
            
        }
        $counter++;
    }
    echo  '</div>';
    // gibt ein Zusammengesetzten String zur�ck
    //bei echo braucht man nach jedem String ein ","
}


include "Funktionen.php";
?>

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

<script type="text/javascript">
    this.warenkorb = [];
    this.tisch = 2;
    this.gast = "PAGINA";
    this.restaurant = 1;

	function warenkorbHinzu(gericht_id){
        this.warenkorb.push(gericht_id);
	}

    function warenkorbEnt(gericht_id){
        for (var i = 0; i < this.warenkorb.length; i++) {
            if(this.warenkorb[i] === gericht_id){
                this.warenkorb.splice(i,1);
                break;
            }
        }
	}

    function bestellen(){
        jQuery.ajax({
            url: "Bestellen.php",
            type: "POST",
            data:{
                warenkorb: this.warenkorb,
                restaurant: this.restaurant,
                gast: this.gast,
                tisch: this.tisch
            }
        });

    }
</script>

</head>

<body id="Speisekarte" data-spy="scroll" data-target=".navbar" data-offset="50">



<?php 
include 'Navbar.php';
?>


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
    
    <Button onclick="bestellen()">Bestellen</Button>
<Button onclick="warenkorbHinzu(1)">wk 1</Button>
<Button onclick="warenkorbHinzu(2)">wk 2</Button>
<Button onclick="warenkorbEnt(2)">wk weg 2</Button>
   
 </div> 
</body>


<footer class="container-fluid bg-4 text-center" width="100%">
<br>
  <p><a href="Impressum.php"><b>Impressum</b></a></p> 
</footer>


</html>