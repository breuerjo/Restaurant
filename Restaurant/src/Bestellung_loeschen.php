<?php
    include 'Funktionen.php';
    $bestellung_id = urlParameter('bestellung_id');
    dbQuery("DELETE FROM `bestellung` WHERE `bestellung_id` =:bestellung_id", array(':bestellung_id' => $bestellung_id));
?>