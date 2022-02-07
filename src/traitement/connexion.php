<?php
require_once '../src/bdd/Bdd.php';

$bdd = new Bdd();
$sel = $bdd->bdd()->prepare('SELECT * FROM pilote WHERE nom = :nom AND prenom = :prenom');
$sel->execute(array(
    'nom'=>$_POST['nom'],
    'prenom'=>$_POST['prenom']
));
$res = $sel->fetchAll();

if($res)
{
    session_start();
    header('Location: ../vue/espaceMembre.html');
}
else{
    header('Location: ../vue/connexionUser.html');
}