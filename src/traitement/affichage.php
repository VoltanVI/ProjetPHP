<?php

require_once '../src/bdd/Bdd.php';

class Affichage
{

    private $select;

    /**
     * @return mixed
     */
    public function getSelect()
    {
        return $this->select;
    }

    /**
     * @param mixed $select
     */
    public function setSelect($select)
    {
        $bdd = new bdd();
        $req = $bdd->bdd()->prepare('SELECT * FROM vol');
        $req->execute();
        $this->select = $select;
    }

}


