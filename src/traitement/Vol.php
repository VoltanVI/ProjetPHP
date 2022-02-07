<?php

require_once '../src/bdd/Bdd.php';
class Vol
{


    public function connexion (){

        $bdd = new Bdd();
        $sel = $bdd->bdd()->prepare('SELECT * FROM pilote WHERE nom = :nom AND prenom = :prenom');
        $sel->execute(array(
            'nom' => $_POST['nom'],
            'prenom' => $_POST['prenom']
        ));
        $res = $sel->fetchAll();

        if ($res) {
            session_start();
            header('Location: ../vue/espaceMembre.html');
        } else {
            header('Location: ../vue/connexionUser.php');
        }
    }

    public function insertion(){

        $bdd = new Bdd();
        $ins = $bdd->bdd()->prepare('INSERT INTO vol (date_depart, heure_depart, heure_arrivee, ref_pilote, ref_avion) VALUES (:ddepart,:hdepart,:harrivee,:rpilote,:ravion)');
        $ins->execute(array(
            'date_depart'=>$_POST['ddepart'],
            'heure_depart'=>$_POST['hdepart'],
            'heure_arrivee'=>$_POST['harrivee'],
            'ref_pilote'=>$_POST['rpilote'],
            'ref_avion'=>$_POST['ravion']
        ));

        header('Location: ../src/vue/saisi.html');
    }

    public function selectVol(){

        $bdd = new bdd();
        $req = $bdd->bdd()->prepare('SELECT * FROM vol');
        $req->execute();
    }


}