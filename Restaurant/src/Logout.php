<?php

session_start();
session_destroy();

echo "Logout erfolgreich";
echo '<button class="btn btn-default"><a href="Mitarbeiter-Login.php">Zurück zum Login</a></button>';


/*
echo $_COOKIE['mitarbeiter_benutzername'];
echo $_COOKIE['mitarbeiter_passwort'];

unset($_COOKIE['mitarbeiter_benutzername']);
unset($_COOKIE['mitarbeiter_passwort']);

echo $_COOKIE['mitarbeiter_benutzername'];
echo $_COOKIE['mitarbeiter_passwort'];

session_start();
session_destroy();
*/
//echo $_COOKIE['mitarbeiter_benutzername'];
//echo $_COOKIE['mitarbeiter_passwort'];
?>