<?php
require_once ('connect.php');
try{
    $connexion = connect_bd();
    $recherche = "SELECT * FROM FILMS";
    $films = $connexion->query($recherche);
    while ($film = $films->fetchObject()) {
        echo $film->Titre."\n";
    }
    $connexion = null;
}
catch (PDOException $e) {
    echo $e−>getMessage();
}