<!DOCTYPE>
<html>

<head>


  <title>Mittarbeiter-Einloggen</title>
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


<?php 

    function SignIn() { 
    
        session_start(); //starting the session for user profile page 
            $user_id = $_POST['user'];
            $user_pw = $_POST['pass'];
            
            $pdo = new PDO('mysql:host=localhost;dbname=restaurant_db;charset=utf8', 'root', '');
            $statement = $pdo->prepare("SELECT * FROM mitarbeiter where mitarbeiter_benutzername = '$user_id' AND mitarbeiter_passwort = '$user_pw'"); 
            $statement->execute(array());
            $row = $statement->fetch();
            
            if(!empty($row['mitarbeiter_benutzername']) AND !empty($row['mitarbeiter_passwort'])) { 
                $_SESSION['mitarbeiter_benutzername'] = $row['mitarbeiter_benutzername']; 
                
                /*
                echo '<p>SUCCESSFULLY LOGIN TO USER PROFILE PAGE...</p><br>';
                echo $_SESSION["mitarbeiter_benutzername"];
                echo '<button class="btn btn-default"><a href="index-Mitarbeiter.php">Weiter zur Startseite</a></button>';
                */
                
                echo '<div class="w3-row-padding w3-padding-16 w3-center w3-margin-top">Login erfolgreich mit dem Benutzernamen: ',$_SESSION["mitarbeiter_benutzername"],'<br>
                <br><button class="w3-button w3-blue"><a href="index-Mitarbeiter.php">Weiter zur Startseite</a></button></div>';
            } 
                //COOKIE SETZEN!
                //setcookie("mitarbeiter_benutzername", $row['mitarbeiter_benutzername'], time() + (86400 * 1), "/"); // 86400 = 1 day
                //echo '<p>Benutzername ist:  ', $_COOKIE["mitarbeiter_benutzername"],' </p>';
                
                
                
                /*setcookie("mitarbeiter_passwort", $row['mitarbeiter_passwort'], time() + (86400 * 1), "/"); // 86400 = 1 day
                echo '<p>Passwort ist:  ',$_COOKIE["mitarbeiter_passwort"],'</p>
                      
                */
                
             
            else { 
                echo '<div class="w3-row-padding w3-padding-16 w3-center w3-margin-top">Falscher Benutzername oder Passwort <br> 
                <br><button class="w3-button w3-red"><a href="Mitarbeiter-Login.php">Zur&uuml;ck zum Login</a></button></div>';
            } 
        }
        

?>



<body>
	<?php 
	if(isset($_POST['login'])) {
	    SignIn();
	}
	 ?>
</body>

<footer class="container-fluid md-12 text center navbar-fixed-bottom">
  	<div class="col-md-4 navbar-text pull-left"><p><a href="Impressum.php"><b>Impressum</b></a></p></div> 
  	<div class="col-md-4 navbar-text pull-right"><p><a href="Impressum.php"><b>Datenschutz</b></a></p></div>
</footer>
</html>



