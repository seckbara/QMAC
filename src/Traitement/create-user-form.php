<?php

$entitymanager  = require_once join(DIRECTORY_SEPARATOR, [__DIR__, '../../bootstrap.php']);
use GestionUser\Entity\Utilisateurs;

$user = new Utilisateurs();
$result = [];

$user->setNom($_POST['nom']);
$user->setPrenom($_POST['prenom']);
$user->setEmail($_POST['email']);
$user->setRole($_POST['role']);
$user->setDateinsciprtion($_POST['date']);
$user->setSexe($_POST['sexe']);
$user->setPassword($_POST['password']);
$user->setCpassword($_POST['cpassword']);
$user->setFonction($_POST['fonction']);
$entitymanager->persist($user);

if($_POST['password'] == $_POST['cpassword']){
    $entitymanager->flush();
    $result['result'] = 'succes';
    echo json_encode($result);
    exit();
}
else{
    $result['result'] = 'echec';
    echo json_encode($result);
    exit();
}

