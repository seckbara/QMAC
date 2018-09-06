<?php

$entitymanager  = require_once join(DIRECTORY_SEPARATOR, [__DIR__, '../../bootstrap.php']);
use GestionUser\Entity\Utilisateurs;
use GestionUser\Entity\Adresses;

$adresse = new Adresses();
$adresse->setNomRue(trim($_POST['nom_rue']));
$adresse->setNumeroRue(trim($_POST['numero_rue']));
$adresse->setVille(trim($_POST['ville']));
$adresse->setRegion(trim($_POST['region']));
$adresse->setPays(trim($_POST['pays']));
$adresse->setCodePostale(trim($_POST['code_postal']));

$usersdepo = $entitymanager->getRepository(Utilisateurs::class);
$currentUser = $usersdepo->find($_POST['user_id']);
$currentUser->setAdresseId($adresse);

$entitymanager->persist($adresse);
$entitymanager->flush();

header('Location: ../../pages/pro-users.php');
