<?php 

    function SignIn() { 
    
        session_start(); //starting the session for user profile page 
        
        if(!empty($_POST['user'])) {
            $pdo = new PDO('mysql:host=localhost;dbname=restaurant_db;charset=utf8', 'root', '');
            $statement = $pdo->prepare("SELECT * FROM mitarbeiter where mitarbeiter_benutzername = '$_POST[user]' AND mitarbeiter_passwort = '$_POST[pass]'") or die(mysql_error()); 
            $statement->execute(array());
            $row = $statement->fetch();
            
            if(!empty($row['mitarbeiter_benutzername']) AND !empty($row['mitarbeiter_passwort'])) { 
                $_SESSION['mitarbeiter_benutzername'] = $row['mitarbeiter_passwort']; 
                
                echo '<p>SUCCESSFULLY LOGIN TO USER PROFILE PAGE...</p>';
                
                //COOKIE SETZEN!
                setcookie("mitarbeiter_benutzername", $row['mitarbeiter_benutzername'], time() + (86400 * 1), "/"); // 86400 = 1 day
                echo '<p>Benutzername ist:  ', $_COOKIE["mitarbeiter_benutzername"],' </p>';
                
                
                
                setcookie("mitarbeiter_passwort", $row['mitarbeiter_passwort'], time() + (86400 * 1), "/"); // 86400 = 1 day
                echo '<p>Passwort ist:  ',$_COOKIE["mitarbeiter_passwort"],'</p>
                      <button class="btn btn-default"><a href="index-Mitarbeiter.php">Weiter</a></button>';
                
                 
                
            } 
            else { 
                echo "SORRY... YOU ENTERD WRONG ID AND PASSWORD... PLEASE RETRY..."; 
            } 
        }
    } 
        
        
        
    if(isset($_POST['login'])) { 
        SignIn(); 
    }

?>