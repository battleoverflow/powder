<?php
/*
    Project: Powder (https://github.com/azazelm3dj3d/powder)
    License: BSD 2-Clause

    Author: azazelm3dj3d (https://github.com/azazelm3dj3d)
*/

require_once __DIR__.'/../vendor/autoload.php';

use Jinx\Application;

use powder\controllers\AuthController;
use powder\controllers\SiteController;
use powder\models\User;

// Using immutable as to not allow the framework to overwrite the .env file for now
$dotenv = Dotenv\Dotenv::createImmutable(dirname(__DIR__));
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

$jinx = new Application(dirname(__DIR__), $db_config);

// GET methods
$jinx->router->get('/', [SiteController::class, 'home']);
$jinx->router->get('/login', [AuthController::class, 'login']);
$jinx->router->get('/register', [AuthController::class, 'register']);
$jinx->router->get('/profile', [AuthController::class, 'profile']);

// TODO: Convert to POST
$jinx->router->get('/logout', [AuthController::class, 'logout']);

// POST methods
$jinx->router->post('/login', [AuthController::class, 'login']);
$jinx->router->post('/register', [AuthController::class, 'register']);

$jinx->run();