<?php
/*
    Project: Powder (https://github.com/battleoverflow/powder)
    License: BSD 2-Clause

    Author: battleoverflow (https://github.com/battleoverflow)
*/

use Jinx\Application;

require_once __DIR__.'/vendor/autoload.php';

// Using immutable as to not allow the framework to overwrite the .env file for now
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

// Database config
$db_config  = [
    'userClass' => User::class,
    
    'db' => [
        'db_dsn' => $_ENV['DB_STRING'],
        'db_username' => $_ENV['DB_USERNAME'],
        'db_password' => $_ENV['DB_PASSWORD']
    ]
];

$jinx = new Application(__DIR__, $db_config);
$jinx->db->applyMigrations();

?>
