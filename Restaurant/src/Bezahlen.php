<?php
$kunde = $_POST['kunde'];




$pdo = new PDO('mysql:host=localhost;dbname=restaurant_db;charset=utf8', 'root', '');

//erstmal schauen ob der was bestellt hat vlt


//hier soll jz mal alles aus dem wk in die bestellung gepackt werden
$statement = $pdo->prepare("INSERT INTO bestellung (gast_id, bestellung_datum) VALUES (:g, NOW());");
$statement2 = $pdo->prepare("SELECT LAST_INSERT_ID();");

$statement->execute(array(':g' => $kunde)); 
$statement2->execute(array()); 

$bestellung_id = $statement2->fetch()[0];

//jetzt muss ich den warenkorb bekommen

$statement = $pdo->prepare("SELECT gericht.gericht_id FROM gericht INNER JOIN warenkorb on warenkorb.gericht_id = gericht.gericht_id AND warenkorb.gast_id = :kunde");
$statement->execute(array(':kunde' => $kunde));
$keins = true;   
while($row = $statement->fetch()) {
    $keins = false;
    $statement3 = $pdo->prepare("INSERT INTO `bestellung_gerichte`(`bestellung_id`, `gericht_id`) VALUES (:bestellung, :gericht)");

    $statement3->execute(array(':bestellung' => $bestellung_id, ':gericht' => $row['gericht_id'])); 
} 

if($keins){
    echo '-1';
}
else{
echo $bestellung_id;
}

?>