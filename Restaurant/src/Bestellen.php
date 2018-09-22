<?php
$gast = $_POST['gast'];
$restaurant = $_POST['restaurant'];
$tisch = $_POST['tisch'];
$wk = $_POST['warenkorb'];


$pdo = new PDO('mysql:host=localhost;dbname=restaurant_db;charset=utf8', 'root', '');

$statement = $pdo->prepare("INSERT INTO bestellung (restaurant_id, bestellung_gast_name, bestellung_datum, bestellung_tisch_id) VALUES (:r, :n, NOW(), :t);");
$statement2 = $pdo->prepare("SELECT LAST_INSERT_ID();");

$statement->execute(array(':r' => $restaurant, ':n' => $gast, ':t' => $tisch)); 
$statement2->execute(array()); 

$bestellung = $statement2->fetch()[0];

//jetzt noch den warenkorb einsetzen


foreach($wk as $gericht){
    $statement3 = $pdo->prepare("INSERT INTO `bestellung_gerichte`(`bestellung_id`, `gericht_id`) VALUES (:bestellung, :gericht)");

    $statement3->execute(array(':bestellung' => $bestellung, ':gericht' => $gericht)); 
}


?>