<?php
require("Personne.php");
class Repertoire {
    
    private $pdo ;
    
    function __construct(){
        $login = 'root';
        $password = '753214563Kk';
        $this->pdo = new PDO('mysql:host=localhost;dbname=repertoire_tp2'
        ,$login, $password);
    }
    public function recupererPersonne($id) {
        $recup = "SELECT * FROM personne WHERE id='$id'";
        $res = $this->pdo->query($recup)->fetch();
        $value = $res->fetch();
        $pers = new Personne($value["nom"], $value["prenom"], $value["numtel"], $value["mail"]);
        return $pers;
    }
}