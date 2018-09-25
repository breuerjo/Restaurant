<?php

session_start();
session_destroy();

echo "Logout erfolgreich";
echo '<button class="btn btn-default"><a href="Mitarbeiter-Login.php">Zurück zum Login</a></button>';

?>