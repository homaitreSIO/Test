<?php require("Personne.php"); ?>
<?php require("Repertoire.php"); ?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <a href="afficher.php">Pour afficher le contenu de la table</a> <br>
        <a href="ajout.php">Pour ajouter du contenu à la table</a> <br> <br>
        
        <?php 
        $pers = new Personne("Homaitre", "Killian", "01 03 05 07 09", "qziduqzd@sfr.fr");
        $pers2 = new Personne("Dormoy", "Guillaume", "02 04 06 08 10", "qzd@sfr.de", 10);
        
        $pers->afficherPersonne();
        ?> <br> <?php
        $pers2->afficherPersonne();
        ?> <br> <?php
        echo "recupererPersonne(1)";
        ?>
        
        
    </body>
</html>
