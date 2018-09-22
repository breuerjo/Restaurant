<?php
$gericht = $_POST['gericht'];
$kunde = $_POST['kunde'];


$pdo = new PDO('mysql:host=localhost;dbname=restaurant_db;charset=utf8', 'root', '');


$statement = $pdo->prepare("DELETE FROM warenkorb WHERE gast_id = :kunde AND gericht_id = :gericht LIMIT 1");
     
$statement->execute(array(':kunde' => $kunde, ':gericht' => $gericht)); 

echo $gericht, " abbestellt von ", $kunde;
?>