<?php
require_once ('connect.php');
try{
    $connexion = connect_bd();
    $recherche = "INSERT INTO FILMS (Titre, AnneeRea, Genre, Studio, Synopsis, Realisateur) VALUES (?, ?, ?, ?, ?, ?);";
    $stmt = $connexion->prepare($recherche);
    $stmt->execute(array($_GET['Titre'], $_GET['AnneeRea'], $_GET['Genre'], $_GET['Studio'], $_GET['Synopsis'], $_GET['Realisateur']));
    $connexion = null;
}
catch (PDOException $e) {
    echo $e−>getMessage();
}