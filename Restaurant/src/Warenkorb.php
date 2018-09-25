<!DOCTYPE>
<html>

<head>


  <title>Warenkorb</title>
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

<body id="Warenkorb" data-spy="scroll" data-target=".navbar" data-offset="50">

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
        function printAngebote(){   //also die aus dem warenkorb
    

            $pdo = new PDO('mysql:host=localhost;dbname=restaurant_db;charset=utf8', 'root', '');
             
            $statement = $pdo->prepare("SELECT gericht.* FROM gericht INNER JOIN warenkorb on warenkorb.gericht_id = gericht.gericht_id AND warenkorb.gast_id = :kunde");
            $statement->execute(array(':kunde' => getKundenId()));  
            $counter=0;
            while($gericht = $statement->fetch()) {
                //print_r($row);    //gibt vorläufig mal alles aus 
                //echo '<Button onclick="deleteElement(',$row['gericht_id'],', ',getKundenId(),')">Element ausm warenkorb</Button>';
                
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
                    <p>',$gericht['gericht_preis'],'&euro;</p>
	                <button class="w3-button w3-red" onclick="deleteElement(',$gericht['gericht_id'],', ',getKundenId(),')"">Entfernen</button>
                    </div>';
                $counter++;
            
            }
            if($counter % 4 != 0){  //Reihe beenden 
                echo  '</div>';

            }
        }
    
        function printPreis(){    //wieviel unser wk kostet
        
    
        $pdo = new PDO('mysql:host=localhost;dbname=restaurant_db;charset=utf8', 'root', '');
             
        $statement = $pdo->prepare("SELECT SUM(gericht.gericht_preis) FROM gericht INNER JOIN warenkorb on gericht.gericht_id = warenkorb.gericht_id AND warenkorb.gast_id = :kunde");
        $statement->execute(array(':kunde' => getKundenId()));   
        $row = $statement->fetch();
        $sum = $row[0];
        echo $sum;
    
    }
        ?>
    
    
    <script type="text/javascript">
    function deleteElement(id, kunde){
        jQuery.ajax({
            url: "Abbestellen.php",
            type: "POST",
            data: "gericht=" + id + "&kunde=" + kunde,
            success: function(){
                
        location.reload();
            }
        });
    }
    
    function bezahlen(kunde){
        jQuery.ajax({
            url: "Bezahlen.php",
            type: "POST",
            data: "kunde=" + kunde, 
            success: function(res){
              if(res == -1){
                return; //keine items
              }
                window.location.href = 'Beleg.php?bestellung=' + res;
            }
        });
        
    }
    </script>

<br>
<br>
<div id="warenkorb" class="container-fluid text-center">

<?php printAngebote();?>

<div class="w3-row-padding w3-padding-16 w3-center">
    <h3>Gesamtpreis: <?php printPreis();?>&euro;</h3>
    <Button class="w3-button w3-blue" onclick="bezahlen(<?php echo getKundenId();?>)">Bezahlen oder entg&uumlltig bestellen</Button>
</div>



<!-- hier soll dann auch ein link hin um wieder ne neue bestellung aufzugeben-->

</div>
</body>


<footer class="container-fluid md-12 text center navbar-fixed-bottom">
  	<div class="col-md-4 navbar-text pull-left"><p><a href="Impressum.php"><b>Impressum</b></a></p></div> 
  	<div class="col-md-4 navbar-text pull-right"><p><a href="Impressum.php"><b>Datenschutz</b></a></p></div>
</footer>



</html>