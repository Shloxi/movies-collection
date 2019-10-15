<?php
require_once ('connect.php');
try{
    $connexion = connect_bd();
    $recherche = "SELECT * FROM FILMS where Titre LIKE ?";
    $stmt = $connexion->prepare($recherche);
    $stmt->execute(array("%".$_GET['nom']."%"));
    while ($film = $stmt->fetchObject()) {
        echo $film->Titre;
    }
    $connexion = null;
}
catch (PDOException $e) {
    echo $e−>getMessage();
}