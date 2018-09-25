<?php 
echo $_SESSION['mitarbeiter_benutzername'];
echo $_SESSION['mitarbeiter_passwort'];

echo $_COOKIE['mitarbeiter_benutzername'];
echo $_COOKIE['mitarbeiter_passwort'];

unset($_COOKIE['mitarbeiter_benutzername']);
unset($_COOKIE['mitarbeiter_passwort']);

session_start();
session_destroy();

//echo $_COOKIE['mitarbeiter_benutzername'];
//echo $_COOKIE['mitarbeiter_passwort'];
?>