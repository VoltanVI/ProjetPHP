<?php

require_once '../../src/bdd/Bdd.php';
class Vol
{

    public function connexion (){
        $bdd = new Bdd();
        $sel = $bdd->bdd()->prepare('SELECT * FROM user WHERE login = :login AND mdp = :mdp');
        $sel->execute(array(
            'login' => $_POST['login'],
            'mdp' => $_POST['mdp']
        ));
        $res = $sel->fetchAll();

        if ($res) {
            session_start();
            $_SESSION['nom'] = $_POST['nom'];
            $_SESSION['prenom'] = $_POST['prenom'];
            header('Location: ../../src/modele/Connected/espaceMembre.php');
        } else {
            header('Location: ../../src/modele/connexionUser.php');
        }
        //$this->hydrate();

    }

    public function inscription(){

        $bdd = new Bdd();
        $req = $bdd->bdd()->prepare('SELECT * FROM user');
        $req->execute();
        if (!$req->fetchAll()){
            $inscrit = $bdd->bdd()->prepare('INSERT INTO user (nom, login, mdp) VALUES (:nom, :login, :mdp)');
            $inscrit->execute(array(
                'nom'=>$_POST['nom'],
                'login'=>$_POST['login'],
                'mdp'=>$_POST['mdp']
            ));
            var_dump($_POST);
            header('Location: ../../src/modele/connexionUser.php');


        }
        header('Location: ../../src/modele/connexionUser.php');

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
        header('Location: ../../src/modele/vol.php');
        //$this->hydrate();

    }

    public function selectVol(){

        $bdd = new bdd();
        $req = $bdd->bdd()->prepare('SELECT * FROM vol');
        $req->execute();

    }

    public function updateVol(){

        $bdd = new Bdd();
        $up = $bdd->bdd()->prepare('UPDATE vol SET date_depart = :date_depart, heure_depart = :heure_depart, heure_arrivee = :heure_arrivee, ref_pilote = :ref_pilote, ref_avion = :ref_avion WHERE id_vol = :id_vol');
        $up->execute(array(
            'id_vol'=>$_POST['id_vol'],
            'date_depart'=>$_POST['ddepart'],
            'heure_depart'=>$_POST['hdepart'],
            'heure_arrivee'=>$_POST['harrivee'],
            'ref_pilote'=>$_POST['rpilote'],
            'ref_avion'=>$_POST['ravion']
        ));

        header('Location: ../../src/modele/vol.php');
        //$this->hydrate();

    }

    public function deleteVol(){

        $bdd = new Bdd();
        $del = $bdd->bdd()->prepare('DELETE FROM vol WHERE id_vol = :id_vol');
        $del->execute(array(
            'id_vol'=>$_POST['id_vol']

        ));
        header('Location: ../../src/modele/vol.php');
        //$this->hydrate();

    }

    public function hydrate(array $donnees){
        foreach ($donnees as $key => $value) {
            $method = 'set' . ucfirst($key);
            if (method_exists($this, $method)) {// On appelle le setter.
                $this->$method($value);
            }
        }
    }


}