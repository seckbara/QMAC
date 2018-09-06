<?php

$entitymanager  = require_once join(DIRECTORY_SEPARATOR, [__DIR__, '../../bootstrap.php']);
use GestionUser\Entity\Utilisateurs;

// Intaciation d'un utilisateur
$user = new Utilisateurs();
// Tableau pour recuperer le type de retour du resultat
$result = [];

$user->setNom(trim($_POST['nom']));
$user->setPrenom(trim($_POST['prenom']));
$user->setEmail(trim($_POST['email']));
$user->setRole($_POST['role']);
$user->setDateinsciprtion($_POST['date']);
$user->setSexe($_POST['sexe']);
$user->setPassword(trim($_POST['password']));
$user->setCpassword(trim($_POST['cpassword']));
$user->setFonction($_POST['fonction']);
$entitymanager->persist($user);

// Vérification si les mots de passe sont identique
if ($_POST['password'] == $_POST['cpassword']) {
    $entitymanager->flush();
    $result['result'] = 'succes';
    echo json_encode($result);
    exit();
} else {
    $result['result'] = 'echec';
    echo json_encode($result);
    exit();
}
