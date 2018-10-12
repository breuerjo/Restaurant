<?php 
$pw = 123;


$user_id = 'russo_f';
$user_pw = "qwe";


$pdo = new PDO('mysql:host=localhost;dbname=restaurant_db;charset=utf8', 'root', '');
$statement = $pdo->prepare('SELECT * FROM `mitarbeiter` WHERE `mitarbeiter_benutzername` = :id');
$statement->execute(array(':id' => $user_id));

$row = $statement->fetch();

print_r($row);
echo $row['mitarbeiter_passwort'];

echo password_hash($user_pw, PASSWORD_DEFAULT);


if(password_verify($user_pw, $row['mitarbeiter_passwort'])){
    print_r($row);
}


?>
