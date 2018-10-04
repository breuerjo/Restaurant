<?php 
include 'Funktionen.php';

$tisch = $_POST['tisch'];
$name = $_POST['name'];


$pdo = new PDO('mysql:host=localhost;dbname=restaurant_db;charset=utf8', 'root', '');
$statement = $pdo->prepare("INSERT INTO gaeste (`name`, `tisch`) VALUES (:n, :t);");
$statement2 = $pdo->prepare("SELECT LAST_INSERT_ID();");
$statement->execute(array(':n' => $name, ':t' => $tisch)); 
$statement2->execute(array()); 

$gast_id = $statement2->fetch()[0];

//$_SESSION['gast'] = $gast_id;
setcookie('gast', $gast_id, time() + (3600), "/"); // 60 Minuten

echo $gast_id;

?>