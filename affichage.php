<?php

require_once 'bdd.php';

class affichage
{

    public function afficher(){
        $bdd = new bdd();
        $req = $bdd->bdd()->prepare('SELECT * FROM vol');
        $req->execute();


    }



}


