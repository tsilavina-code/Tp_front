<?php

// Enregistrement de la connexion à la base de données
$config = require __DIR__ . '/config.php';
$dbConfig = $config['db'];

Flight::register('db', 'PDO', [
    "mysql:host={$dbConfig['host']};dbname={$dbConfig['dbname']};charset=utf8mb4",
    $dbConfig['user'],
    $dbConfig['pass'],
    [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
]);