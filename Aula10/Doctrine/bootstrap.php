<?php

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;
use Doctrine\DBAL\Configuration;
use Doctrine\DBAL\DriverManager;

require_once "vendor/autoload.php";

$config = Setup::createAnnotationMetadataConfiguration([__DIR__."/src"], true );

$configConn = new Configuration();

$connectionParams = [
    'dbname'    => 'loja',
    'user'      => 'root',
    'password'  => '4linux',
    'host'      => 'localhost',
    'driver'    => 'pdo_mysql'
];

$conn = DriverManager::getConnection($connectionParams,$configConn);

$entityManager = EntityManager::create($conn,$config);
