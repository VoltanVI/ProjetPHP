<?php

require_once 'Vol.php';

$bdd = new Bdd();
$del = $bdd->bdd()->prepare('DELETE FROM vol WHERE id_vol = :id_vol');
$del->execute(array(
    'id_vol'=>$_POST['idvol'],

));

//$vol = new Vol();
//$vol->delete();