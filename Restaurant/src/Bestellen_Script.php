<?php
$gericht = $_POST['gericht']; // Gericht-ID
$kunde = $_POST['kunde'];

// ich brauche ein gericht und nen kunden -> packt des zeug in den warenkorb

$pdo = new PDO('mysql:host=localhost;dbname=restaurant_db;charset=utf8', 'root', '');

$statement = $pdo->prepare("INSERT INTO warenkorb (gericht_id, gast_id) values (:gericht, :kunde)");

$statement->execute(array(
    ':gericht' => $gericht,
    ':kunde' => $kunde
));

echo $gericht, " bestellt von kunde  ", $kunde;
?>


