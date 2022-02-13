<?php

require_once '../../src/bdd/Bdd.php';
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
            $_SESSION['nom'] = $_POST['nom'];
            $_SESSION['prenom'] = $_POST['prenom'];
            header('Location: ../../vue/espaceMembre.html');
        } else {
            header('Location: ../../vue/connexionUser.php');
        }

    }

    public function insertion(){

        $bdd = new Bdd();

        $ins = $bdd->bdd()->prepare('INSERT INTO vol (date_depart, heure_depart, heure_arrivee, ref_pilote, ref_avion) VALUES (:date_depart,:heure_depart,:heure_arrivee,:ref_pilote,:ref_avion)');
        $ins->execute(array(
            'date_depart'=>$_POST['ddepart'],
            'heure_depart'=>$_POST['hdepart'],
            'heure_arrivee'=>$_POST['harrivee'],
            'ref_pilote'=>$_POST['rpilote'],
            'ref_avion'=>$_POST['ravion']
        ));
        header('Location: ../../vue/vol.php');

    }

    public function selectVol(){

        $bdd = new bdd();
        $req = $bdd->bdd()->prepare('SELECT * FROM vol');
        $req->execute();

    }

    public function updateVol(){

        $bdd = new Bdd();
        $sel = $this->selectVol();
        $sel->fetchAll();
        

        if ($sel){

            $up = $bdd->bdd()->prepare('UPDATE vol SET date_depart = :date_depart, heure_depart = :heure_depart, heure_arriver = :heure_arrivee, ref_pilote = :ref_pilote, ref_avion = :ref_avion');
            $up->execute(array(
                'date_depart'=>$_POST['ddepart'],
                'heure_depart'=>$_POST['hdepart'],
                'heure_arrivee'=>$_POST['harrivee'],
                'ref_pilote'=>$_POST['rpilote'],
                'ref_avion'=>$_POST['ravion']
            ));
        }





    }

    public function deconnexion(){

        session_destroy();
        header('Location: ../../index.html');

    }


}