<?php
    include 'Funktionen.php';
    $bestellung_id = urlParameter('bestellung_id');
    dbQuery("UPDATE bestellung SET bestellung_erledigt= 1 WHERE bestellung_id=:bestellung_id", array(':bestellung_id' => $bestellung_id));
?>