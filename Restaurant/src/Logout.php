<?php 

//echo $_COOKIE['mitarbeiter_benutzername'];
//echo $_COOKIE['mitarbeiter_passwort'];

unset($_COOKIE['mitarbeiter_benutzername']);
unset($_COOKIE['mitarbeiter_passwort']);

session_destroy();

//echo $_COOKIE['mitarbeiter_benutzername'];
//echo $_COOKIE['mitarbeiter_passwort'];
?>