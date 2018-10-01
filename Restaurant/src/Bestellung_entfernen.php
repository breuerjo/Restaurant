<?php
    include 'Funktionen.php';
    $bestellung_id = urlParameter('bestellung_id');
    //$pdo = new PDO('mysql:host=localhost;dbname=restaurant_db;charset=utf8', 'root', '');
    //$statement = $pdo->prepare("UPDATE bestellung SET bestellung_erledigt= 1 WHERE bestellung_id=:bestellung_id");
    //$statement->execute(array(':bestellung_id' => $bestellung_id));
    dbQuery("UPDATE bestellung SET bestellung_erledigt= 1 WHERE bestellung_id=:bestellung_id", array(':bestellung_id' => $bestellung_id));
?>