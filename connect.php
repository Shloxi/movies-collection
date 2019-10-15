<?php
    require("connectId.php");
    session_start();
    function connect_bd(){
        $dsn = "mysql:dbname=".BASE.";host=".SERVER;
        try{
            $connexion = new PDO($dsn, USER, PASSWD);
        }
        catch(PDOException $e){
            printf("Echec connexion : %s\n", $e->getMessage());
            exit();
        }
        return $connexion;
    }
