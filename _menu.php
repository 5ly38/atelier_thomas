    <?php
    session_start();
    echo @$_SESSION["loginUtilConnecte"];
    ?>
<div style="background-color: <?= $_COOKIE["coulPreferee"] ?>">
    <?php if (!isset($_SESSION["loginUtilConnecte"])): ?>
        <a href="login.php">Connexion</a>
    <?php else: ?>
        <a href="logout.php">Déconnexion</a>
    <?php endif; ?>
    <a href="listerFilms.php">Liste des films</a>
    <a href="nouveauFilm.php">Nouveau film</a>
    Style:
    <a href="style.php?style=red">Rouge</a>
    <a href="style.php?style=green">Vert</a>
</div>

