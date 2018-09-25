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
                
                echo '<p>SUCCESSFULLY LOGIN TO USER PROFILE PAGE...</p><br>';
                echo $_SESSION["mitarbeiter_benutzername"];
                echo '<button class="btn btn-default"><a href="index-Mitarbeiter.php">Weiter zur Startseite</a></button>';
                //COOKIE SETZEN!
                //setcookie("mitarbeiter_benutzername", $row['mitarbeiter_benutzername'], time() + (86400 * 1), "/"); // 86400 = 1 day
                //echo '<p>Benutzername ist:  ', $_COOKIE["mitarbeiter_benutzername"],' </p>';
                
                
                
                /*setcookie("mitarbeiter_passwort", $row['mitarbeiter_passwort'], time() + (86400 * 1), "/"); // 86400 = 1 day
                echo '<p>Passwort ist:  ',$_COOKIE["mitarbeiter_passwort"],'</p>
                      
                */
                
            } 
            else { 
                echo "Falscher Benutzername oder Passwort <br>"; 
                echo '<button class="btn btn-default"><a href="Mitarbeiter-Login.php">Zurück zum Login</a></button>';
            } 
        }
        
        
        
    if(isset($_POST['login'])) { 
        SignIn(); 
    }

?>