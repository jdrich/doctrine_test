<?php

require_once "vendor/autoload.php";

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

$config = Setup::createYAMLMetadataConfiguration(array(__DIR__."/config/yaml"), true);

$conn = [
    'dbname' => 'test',
    'user' => 'root',
    'password' => '',
    'host' => 'localhost',
    'driver' => 'pdo_mysql'
];

$doctrine = EntityManager::create($conn, $config);
