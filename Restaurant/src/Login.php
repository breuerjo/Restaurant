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
   
<!--     <label><b>Raum:</b></label> -->
<!--     <input id="raum" value="1" type="text" placeholder="Geben Sie Ihren Raum an"/> -->
	<label><b>Raum:</b></label><br>
    <select name="raum" id="raum">
              <option>1</option>
           </select> <br>
   
<!--     <label><b>Tischnummer:</b></label> -->
<!--     <input id="tisch" type="text"  value="0" placeholder="Geben Sie Ihre Tischnummer an"/> -->
    <label><b>Tisch:</b></label><br>
      <select name="tisch" id="tisch">
          <option>1</option>
          <option>2</option>
          <option>3</option>
          <option>4</option>
          <option>5</option>
          <option>6</option>
          <option>7</option>
          <option>8</option>
          <option>9</option>
          <option>10</option>
          <option>11</option>
          <option>12</option>
          <option>13</option>
          <option>14</option>
          <option>15</option>
          <option>16</option>
          <option>17</option>
          <option>18</option>
          <option>19</option>
          <option>20</option>
       </select> <br>
    
    <label><b>Name:</b></label>
    <input id="name" value="Test" type="text" placeholder="Geben Sie Ihren Namen an"/>
    
    
   
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
        function getRaum(){
        	return isNaN(document.getElementById('raum').value) ? 1 : document.getElementById('raum').value;
        }
        document.getElementById("checkin").addEventListener("click", function(){
            jQuery.ajax({
                url: "NeuerKunde.php",
                 type: "POST",
                 data: "tisch=" + getTisch() + "&name=" + getName() + "&raum=" + getRaum(),
	                 success: function(res){
	                	 window.location.href = 'Speisekarte.php';
                     //window.location.href = 'Speisekarte.php?kunde=' + res;
                  }
             });
            
        });
    </script>
<br><br><br><br><br><br><br>
<footer class="container-fluid md-12 text center navbar-fixed-bottom">
  	<div class="col-md-2 navbar-text pull-left"><p><a href="Impressum.php"><b>Impressum</b></a></p></div>
  	<div id="testDiv" class="col-md-7 navbar-text pull-left"><p><b></b></p></div> 
  	<div class="col-md-2 navbar-text pull-right"><p><a href="Kontakt.php"><b>Kontakt</b></a></p></div>
</footer>

<script>
$.ajax({ url: 'http://localhost/RestaurantJava/Besucherklicker?login=1',
	dataType: 'html',
	success: function(response)
	{ $('#testDiv').html(response); }
	});
</script>


</body>
</html>


