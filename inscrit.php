<?php
$user = "root";
$pass = "753214563Kk";

if(isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['numtel']) && isset($_POST['mail'])){
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$num = $_POST['numtel'];
$mail = $_POST['mail'];
}
    $db=new PDO('mysql:host=localhost;dbname=repertoire_tp2',$user, $pass);
    
    function verifier($nom, $prenom, $db){
        $requete = "SELECT nom, prenom FROM personne WHERE nom='$nom' AND prenom ='$prenom'";
        $res=$db->query($requete)->fetch();
        return !empty($res);
    }
    
    
    if(verifier($nom, $prenom, $db)){
        echo "Prenom et nom deja present dans la table !";            
    }
    else {
        
        $req= 'INSERT INTO personne(id_pers, nom, prenom, num_tel, mail) '
            . 'VALUES (default, :nom, :prenom, :num, :mail)';
    $insertion = $db->prepare($req) or die("erreur: $req");
    
    $insertion->execute(array(
                        ':nom' => $nom, 
                        ':prenom' => $prenom, 
                        ':num' => $num, 
                        ':mail' => $mail
                        ));
    echo "Personne bien ajouté !";
    header("location: index.php");
  }   
    

    
