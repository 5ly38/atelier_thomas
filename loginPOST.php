<?php

    include_once './LIB/db.php';
    session_start();

    $login = $_REQUEST["login"];
    $mdp = $_REQUEST["mdp"];
    
    $logins = dbRechercherUtilParLoginMdp($login, $mdp);
    if(count($logins)>=1 ){
        
        $_SESSION["loginUtilConnecte"] = $login;
        header("Location: listerFilms.php");
        exit;
    }else{
        
        session_destroy();
    }