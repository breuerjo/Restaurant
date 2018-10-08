<?php function getNavbarKunde($KundenId){

    ?>

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span id="Navbar1"class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a id="restaurant-name" class="navbar-brand" href="Startseite.php"><b><?php echo getRestaurantName(); ?></b></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="Startseite.php">HOME</a></li>
        <li><a href="Speisekarte.php">Unsere Speisen</a></li>
        <li><a href="Warenkorb.php">Warenkorb</a></li>
       </ul>
    </div>
  </div>
</nav>

<?php } 


function getNavbarMitarbeiter(){
?>


<script type="text/javascript">
    
    function logout(){
        jQuery.ajax({
            url: "Logout.php",
            type: "POST", 
        });
        
    }
    </script>

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span id="Navbar1"class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a id="restaurant-name" class="navbar-brand" href="Startseite.php"><b><?php echo getRestaurantName(); ?></b></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="Startseite.php">HOME</a></li>
        <li><a href="Speisekarte.php">Unsere Speisen</a></li>
        <!--  <li><a href="Buffet.php">Buffet/Preise</a></li>-->
        <li><a href="Bestellungen.php">Bestellungen</a></li>
        <li><a href="Mitarbeiter&uuml;bersicht.php">Mitarbeiter&uuml;bersicht</a></li>
        <li>
        <?php 
        if($_SESSION['mitarbeiter_benutzername'] === "russo_f"){
            echo '<li><a href="http://localhost/RestaurantJava/InhaberInhalt.jsp">Inhaber-Infos</a></li>';
        }
        ?>
        <li><a href="Logout.php"><Button class="w3-button w3-red" onclick="logout()">Logout</Button></a></li>
       </ul>
    </div>
  </div>
</nav>

<?php 
}?>