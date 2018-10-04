<!DOCTYPE html>
<html>
<?php 
include "Funktionen.php";

/*


Also hier oder in einem File dergleichen soll der kunde seinen namen und seinen tisch angeben

*/
?>
<head>

  <title>Gast-Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="..\css\style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
 </head>

<body id="Login">
<!--  
 <input id="tisch" value="0"/>
<input id="name" value="PAGINA"/>
<button id="checkin">hier gehts zur speisekarte php</button>

    <script type="text/javascript">
        function getTisch(){
            return isNaN(document.getElementById('tisch').value) ? 0 : document.getElementById('tisch').value;
        }
        function getName(){
            return document.getElementById('name').value;
        }
        document.getElementById("checkin").addEventListener("click", function(){
            jQuery.ajax({
                url: "NeuerKunde.php",
                 type: "POST",
                 data: "tisch=" + getTisch() + "&name=" + getName(),
                 success: function(res){
                    window.location.href = 'Speisekarte.php?kunde=' + res;
                 }
             });
            
        });
    </script>
-->    
    
<div class="container text-center">
	
<br>
<br>


<h2><b> Herzlich Willkommen im Restaurant <?php echo getRestaurantName(); ?></b></h2>
<h3> Bitte melden Sie sich an oder fahren Sie als Gast fort, um ganz bequem eine Bestellung abzugeben!</h3>
<br>
<img src="..\img\Logo.jpg" width="30%"></img>

<br>
<br>

</div>
 
<form class="form-horizontal text-left"><!-- für die Enter Taste: action="action_page.php"-->

<div class="container">
   
    <label><b>Tischnummer</b></label>
    <input id="tisch" type="text"  value="0" placeholder="Geben Sie ihre Tischnummer an"/>
   
    <label><b>Name</b></label>
    <input id="name" value="PAGINA" type="text" placeholder="Geben Sie ihren Namen an"/>
   
    <button id="checkin" class="btn btn-default">Anmelden</button>
    <button class="btn btn-default"><a href="Mitarbeiter-Login.php">Mitarbeit-Login</a></button>	
    
</div>
   
</form>
 <script type="text/javascript">
        function getTisch(){
            return isNaN(document.getElementById('tisch').value) ? 0 : document.getElementById('tisch').value;
        }
        function getName(){
            return document.getElementById('name').value;
        }
        document.getElementById("checkin").addEventListener("click", function(){
            jQuery.ajax({
                url: "NeuerKunde.php",
                 type: "POST",
                 data: "tisch=" + getTisch() + "&name=" + getName(),
	                 success: function(res){
	                	 window.location.href = 'Speisekarte.php';
                     //window.location.href = 'Speisekarte.php?kunde=' + res;
                  }
             });
            
        });
    </script>


</body>
</html>


