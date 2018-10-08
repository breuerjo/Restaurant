<?php
include 'Funktionen.php';
$kunde = postParameter('kunde');
$pdo = getPDO();
$statement = $pdo->prepare("INSERT INTO bestellung (gast_id, bestellung_datum) VALUES (:g, NOW());");
$statement2 = $pdo->prepare("SELECT LAST_INSERT_ID();");

$statement->execute(array(
    ':g' => $kunde
));
$statement2->execute(array());

$bestellung_id = $statement2->fetch()[0];

// jetzt muss ich den warenkorb bekommen
$gerichte = dbQuery("SELECT gericht.gericht_id FROM gericht INNER JOIN warenkorb on warenkorb.gericht_id = gericht.gericht_id AND warenkorb.gast_id = :kunde", array(
    ':kunde' => $kunde
));

$keins = true;
foreach ($gerichte as $gericht) {
    $keins = false;
    dbQuery("INSERT INTO `bestellung_gerichte`(`bestellung_id`, `gericht_id`) VALUES (:bestellung, :gericht)", array(
        ':bestellung' => $bestellung_id,
        ':gericht' => $gericht['gericht_id']
    ));
}

if ($keins) {
    echo '-1';
} else {
    echo $bestellung_id;
}
?>