<?php

function getRestaurantName() {
    $pdo = new PDO('mysql:host=localhost;dbname=restaurant_db;charset=utf8', 'root', '');
    $statement = $pdo->prepare("SELECT restaurant_name FROM restaurant WHERE restaurant_id = 1");
    $statement->execute(array());
    $row = $statement->fetch();
    $name = $row[0];
    return $name;
}

function dbQuery($query, $array = array()){
    $pdo = new PDO('mysql:host=localhost;dbname=restaurant_db;charset=utf8', 'root', '');
    $statement = $pdo->prepare($query);
    $statement->execute($array);
    return $statement->fetchAll();
}

function getPDO(){
    return new PDO('mysql:host=localhost;dbname=restaurant_db;charset=utf8', 'root', '');
}

function urlParameter($name){
    return isset($_GET[$name]) ? $_GET[$name] : "";
}

function postParameter($name){
    return isset($_POST[$name]) ? $_POST[$name] : "";
}

function getKundenId(){
    if(isset($_COOKIE['gast'])){
        return $_COOKIE['gast'];
    }
    else{
        return 0;
    }
}

function getNavbar(){
    include_once 'Navbar.php';
    
    if(isset($_SESSION['mitarbeiter_benutzername'])) {
        getNavbarMitarbeiter();
    }
    else{
        getNavbarKunde(getKundenId());
    }
}


?>


