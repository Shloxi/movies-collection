<?php
require_once ('connect.php');
try{
    $connexion = connect_bd();
    $recherche = "INSERT INTO REALISATEUR Values (?, ?);";
    $stmt = $connexion->prepare($recherche);
    $stmt->execute(array($_GET['Nom'], date("Y-m-d",$_GET['dateNaiss'])));
    $connexion = null;
}
catch (PDOException $e) {
    echo $e−>getMessage();
}