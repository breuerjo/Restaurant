<!DOCTYPE html>
<html lang="en">



<body>


    <?php 
    
header("Content-Type: text/html; charset=utf-8");

    function printAngebote(){

        $best = $_GET['bestellung'];


        $pdo = new PDO('mysql:host=localhost;dbname=restaurant_db;charset=utf8', 'root', '');

        //als erstes mal die bestellung

        $statement = $pdo->prepare("SELECT * FROM bestellung WHERE bestellung_id = :bestellung");
        $statement->execute(array(':bestellung' => $best));   
        $bestellung = $statement->fetch();  //damit kann man jz machen was man will

        //jz mal sein name und sein tisch
        $statement3 = $pdo->prepare("SELECT * FROM gaeste WHERE gast_id = :kunde");
        $statement3->execute(array(':kunde' => $bestellung['gast_id']));   
        $gast = $statement3->fetch();  //heir ist name und tisch

        //dann holen wir alle gerichte
         
        $statement2 = $pdo->prepare("SELECT * FROM bestellung_gerichte WHERE bestellung_id = :bestellung");
        $statement2->execute(array(':bestellung' => $best));   
        while($row = $statement2->fetch()) {
            print_r($row);
            //mal provisorisch den ganzen spaß raus -> tim todo ;)

        }    
    }

    function printPreis(){
    
    $bestelllung = $_GET['bestellung'];

    $pdo = new PDO('mysql:host=localhost;dbname=restaurant_db;charset=utf8', 'root', '');
         


    $statement = $pdo->prepare("SELECT SUM(gericht.gericht_preis) FROM bestellung_gerichte INNER JOIN gericht ON gericht.gericht_id = bestellung_gerichte.gericht_id WHERE bestellung_id = :bestellung");
    $statement->execute(array(':bestellung' => $bestelllung));   
    $row = $statement->fetch();
    $sum = $row[0];
    echo $sum;

}
?>
<?php printAngebote(); ?>
<?php printPreis(); ?>

</body>

<footer class="container-fluid md-12 text center navbar-fixed-bottom">
  	<div class="col-md-4 navbar-text pull-left"><p><a href="Impressum.php"><b>Impressum</b></a></p></div> 
  	<div class="col-md-4 navbar-text pull-right"><p><a href="Impressum.php"><b>Datenschutz</b></a></p></div>
</footer>


</html>