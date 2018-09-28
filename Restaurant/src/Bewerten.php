<?php 
include 'Funktionen.php';
$bestellung = postParameter('bestellung');
$bewertung = postParameter('bewertung');

dbQuery("UPDATE `bestellung` SET `bestellung_bewertung`= :bewertung WHERE `bestellung_id` = :bestellung", (array(':bestellung' => $bestellung , ':bewertung' => $bewertung)));
 
?>