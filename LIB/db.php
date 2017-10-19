<?php

define("DB_CHAINE_CONNEXION", "mysql:host=localhost;dbname=streaming");
define("DB_USER", "root");

function dbRechercherUtilParLoginMdp($login, $mdp){
    
    $pdo = dbConnexion();
    
    $stm = $pdo->query("SELECT * FROM util WHERE login='$login' AND mdp='$mdp'");
    $tabRes = $stm->fetchAll();
    
    return $tabRes;
}

function supprimerFilm($id){
    
    $pdo = dbConnexion();
    $pdo->exec("DELETE FROM film WHERE id=$id");
}

function dbListerFilms(){
    
    $pdo = dbConnexion();
    $st = $pdo->query("SELECT * FROM film ORDER BY titre");
    
    return $st->fetchAll();
}

function dbAjouterFilm($titre, $anneeProd, $synopsis){
    
    $pdo = dbConnexion();
    $pdo->exec("INSERT INTO film (titre, annee_prod, synopsis) VALUES('$titre', $anneeProd, '$synopsis')");
}

function dbConnexion(){
    
    try{
        
        $pdo = new PDO(DB_CHAINE_CONNEXION, DB_USER);
        return $pdo;
    } catch (Exception $ex) {

        die("ERREUR: " . $ex->getMessage());
    }
}