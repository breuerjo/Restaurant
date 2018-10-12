<?php


function getNavbarKunde($KundenId)
{
    ?>

<nav class="navbar navbar-default navbar-fixed-top">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse"
				data-target="#myNavbar">
				<span id="Navbar1" class="icon-bar"></span> <span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a href="Startseite.php"><img alt="Logo" src="..\img\Logo.jpg"
				width="70px" height="48px"></a> <a id="restaurant-name"
				class="navbar-brand" href="Startseite.php"><b><?php echo getRestaurantName(); ?></b></a>

		</div>
		<div class="collapse navbar-collapse" id="myNavbar">
			<ul class="nav navbar-nav navbar-right">
				<li><a id="Home" href="Startseite.php"><b>HOME</b></a></li>
				<li><a id="Navbar_Speisen" href="Speisekarte.php"><b>Unsere Speisen</b></a></li>
				<li><a id="Navbar_Warenkorb" href="Warenkorb.php"><b>Warenkorb</b></a></li>
			</ul>
		</div>
	</div>
</nav>

<?php

}

function getNavbarMitarbeiter()
{
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
			<button type="button" class="navbar-toggle" data-toggle="collapse"
				data-target="#myNavbar">
				<span id="Navbar1" class="icon-bar"></span> <span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a href="Startseite.php"><img alt="Logo" src="..\img\Logo.jpg"
				width="75px" height="54px"></a> <a id="restaurant-name"
				class="navbar-brand" href="Startseite.php"><b><?php echo getRestaurantName(); ?></b></a>
		</div>
		<div class="collapse navbar-collapse" id="myNavbar">
			<ul class="nav navbar-nav navbar-right white">
				<li><a id="Navbar_HomeM" href="Startseite.php"><b>HOME</b></a></li>
				<li><a id="Navbar_SpeisenM" href="Speisekarte.php"><b>Unsere Speisen</b></a></li>
				<li><a id="Navbar_BestellungenM" href="Bestellungen.php"><b>Bestellungen</b></a></li>
				<li><a id="Navbar_Mitarbeiterübersicht"
					href="Mitarbeiter&uuml;bersicht.php"><b>Mitarbeiter&uuml;bersicht</b></a></li>
				<li>
        <?php
    if ($_SESSION['mitarbeiter_benutzername'] === "russo_f") {
        echo '<li><a id="Inhaber_Infos" href="http://localhost/RestaurantJava/InhaberInhalt.jsp"><b>Inhaber-Infos</b></a></li>';
    }
    ?>
				<li><a href="Logout.php"><Button class="w3-button w3-red"
							onclick="logout()">Logout</Button></a></li>
			</ul>
		</div>
	</div>
</nav>

<?php
}
?>