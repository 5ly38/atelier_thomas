<?php 

    include_once './LIB/db.php';

    $films = dbListerFilms();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php include './_menu.php'; ?>
        <h1>Liste des films</h1>
        
        <table>
            <caption>Films</caption>
            <thead>
                <th>TITRE</th>
                <th>ACTION</th>
            </thead>
            <tbody>
                <?php 
                foreach ($films as $f):
                ?>
                <tr>
                    <td><?= $f["titre"] ?></td>
                    <td><a href="supprimerFilm.php?idFilm=<?= $f["id"] ?>">Suppression</a></td>
                </tr>
                <?php                
                endforeach; 
                ?>
            </tbody>
        </table>
        
        <?php
            
        ?>
    </body>
</html>
