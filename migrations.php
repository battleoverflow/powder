<?php
/*
    Project: Powder (https://github.com/azazelm3dj3d/powder)
    License: BSD 2-Clause

    Author: azazelm3dj3d (https://github.com/azazelm3dj3d)
*/

use Jinx\Jinx;

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

$jinx = new Jinx(__DIR__, $db_config, "src/");
$jinx->db->applyMigrations();

?>
