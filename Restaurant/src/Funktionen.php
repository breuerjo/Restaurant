<?php 
    function getRestaurantName() {
        $pdo = new PDO('mysql:host=localhost;dbname=restaurant_db;charset=utf8', 'root', '');
        $statement = $pdo->prepare("SELECT restaurant_name FROM restaurant WHERE restaurant_id = 1");
        $statement->execute(array());
        $row = $statement->fetch();
        $name = $row[0];
        return $name;
    }


    
?>

