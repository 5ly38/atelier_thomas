<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
        <a href="news.php?date=20171017">News</a>
        
        <form action="ajouter_new.php" method="post">
            <label>Titre de la news</label>
            <input name="titre" type="number"/>
            <br>
            <label>Contenu</label>
            <textarea name="contenu"></textarea>
            <br>
            <input type="submit" value="Publier"/>
            <select name="genre">
                <option>Horreur</option>
                <option>SF</option>
                <option>Comédie</option>
            </select>
        </form>
            
        <?php
            echo "Coucou";
        ?>
    </body>
</html>
