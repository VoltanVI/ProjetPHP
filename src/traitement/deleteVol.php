<?php

require_once '../../src/bdd/Bdd.php';

$bdd = new Bdd();
$del = $bdd->bdd()->prepare('DELETE FROM vol WHERE id_vol = :id_vol');
$del->execute(array(
        'id_vol'=>$_POST['id_vol']

));
header('Location: ../../vue/vol.php');
