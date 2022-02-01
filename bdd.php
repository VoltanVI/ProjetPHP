<?php

class bdd
{

    private $bdd;


    public function __construct()
    {
        $this->bdd = new PDO('mysql:host=localhost;port=3306;dbname=hls_projetphpvol;charset=utf8','root','');
    }

    public function bdd(){

        return $this->bdd;
    }
}