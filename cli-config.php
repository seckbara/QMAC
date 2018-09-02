<?php
/**
 * Created by PhpStorm.
 * User: seck
 * Date: 11/04/2018
 * Time: 17:40
 */

$entityManager = require_once join(DIRECTORY_SEPARATOR, [__DIR__, 'bootstrap.php']);
use Doctrine\ORM\Tools\Console\ConsoleRunner;

return ConsoleRunner::createHelperSet($entityManager);


