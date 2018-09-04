
<?php

require_once join(DIRECTORY_SEPARATOR, [__DIR__, 'vendor', 'autoload.php']);
use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

$entitypath = [
    join(DIRECTORY_SEPARATOR, [__DIR__, "src", "Entity"])
];

$isDevMode = true;
$proxyDir = null;
$cache = null;
$useSimpleAnnotationreader = false;

// Paramettrage de la connexion
$dbparams = [
    'driver' => "pdo_mysql",
    'host' => "localhost",
    'charset' => "utf8",
    'user' => "root",
    'password' => "mamadou",
    'dbname' => "gestionutilisateur"
];

$config = Setup::createAnnotationMetadataConfiguration(
    $entitypath,
    $isDevMode,
    $proxyDir,
    $cache,
    $useSimpleAnnotationreader
);

$entityManager = EntityManager::create($dbparams, $config);

return $entityManager;
