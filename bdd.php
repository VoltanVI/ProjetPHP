<?php

class bdd
{

    public function bdd(){

        $bdd = new PDO('mysql:host=localhost;port=3306;dbname=hls_projetphpvol;charset=utf8','root','');
        return $bdd;

    }
}