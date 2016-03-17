<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
<?php
$user = "root";
$pass = "753214563Kk";

try {
//Connexion à la base de données (une seule fois suffit)
$db=new PDO('mysql:host=localhost;dbname=repertoire_tp2',$user, $pass);
//Parcours des résultats d'une requête
?> 
    <TABLE BORDER="1"> 
     <CAPTION> Table Personne </CAPTION> 
      <TR> 
        <TH> id_pers </TH> 
        <TH> nom </TH> 
        <TH> prenom </TH> 
        <TH> num_tel </TH> 
        <TH> mail </TH>
      </TR> 
 <?php
foreach($db->query('SELECT * from personne') as $row) {
?>
   
      <TR> 
        <TH> <?php echo $row['id_pers']; ?></TH> 
        <TD> <?php echo $row['nom']; ?></TD> 
        <TD> <?php echo $row['prenom']; ?></TD> 
        <TD> <?php echo $row['num_tel']; ?></TD> 
        <TD> <?php echo $row['mail']; ?></TD>
      </TR> 
    
<?php

}
?>
      </TABLE>
<?php
$db = null;
} catch (PDOException $e) {
print "Erreur !: " . $e->getMessage() . "<br/>";
die();
}
?>
</body>
</html>