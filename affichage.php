<?php

require_once 'bdd.php';

class affichage
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


