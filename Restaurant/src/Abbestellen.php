<?php
include 'Funktionen.php';
$gericht = postParameter('gericht');
$kunde = postParameter('kunde');
dbQuery("DELETE FROM warenkorb WHERE gast_id = :kunde AND gericht_id = :gericht LIMIT 1", array(':kunde' => $kunde, ':gericht' => $gericht)); 
echo $gericht, " abbestellt von ", $kunde;
?>