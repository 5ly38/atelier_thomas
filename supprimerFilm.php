<?php

include_once "./LIB/db.php";

$id = $_REQUEST["idFilm"];
supprimerFilm($id);

// Redirection
header("Location: listerFilms.php");
?>
