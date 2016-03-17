<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Personne
 *
 * @author morlinyia
 */
class Personne {
    private $nom, $prenom, $numtel, $mail, $id;
    
    public function __construct($nom, $prenom, $numtel, $mail, $id=0) {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->numtel = $numtel;
        $this->mail = $mail;
        $this->id = $id;
    }
    public function afficherPersonne(){
        echo $this->id . " | " . $this->nom . " | " . $this->prenom . " | " . $this->numtel . " | " . $this->mail;
    }

}
