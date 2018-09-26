<?php 
$bestellung = $_POST['bestellung'];
$bewertung = $_POST['bewertung'];

$pdo = new PDO('mysql:host=localhost;dbname=restaurant_db;charset=utf8', 'root', '');

$statement = $pdo->prepare("UPDATE `bestellung` SET `bestellung_bewertung`= :bewertung WHERE `bestellung_id` = :bestellung");
$statement->execute(array(':bestellung' => $bestellung , ':bewertung' => $bewertung));
 

?>