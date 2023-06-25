<?php
/*
    Project: Powder (https://github.com/azazelm3dj3d/powder)
    License: BSD 2-Clause

    Author: azazelm3dj3d (https://github.com/azazelm3dj3d)
*/

require_once __DIR__.'/../vendor/autoload.php';

use Jinx\Jinx;

use powder\controllers\AuthController;
use powder\controllers\SiteController;
use powder\models\User;

// Using immutable as to not allow the framework to overwrite the .env file for now
$dotenv = Dotenv\Dotenv::createImmutable(dirname(__DIR__));
$dotenv->load();

$site = SiteController::class;
$auth = AuthController::class;

// Database config
$db_config  = [
    'userClass' => User::class,

    'db' => [
        'db_dsn' => $_ENV['DB_STRING'],
        'db_username' => $_ENV['DB_USERNAME'],
        'db_password' => $_ENV['DB_PASSWORD']
    ]
];

$jinx = new Jinx(dirname(__DIR__), $db_config, "src/");

// GET methods
$jinx->router->get('/', [$site, 'home']);
$jinx->router->get('/login', [$auth, 'login']);
$jinx->router->get('/register', [$auth, 'register']);
$jinx->router->get('/profile', [$auth, 'profile']);

// TODO: Convert to POST
$jinx->router->get('/logout', [$auth, 'logout']);

// POST methods
$jinx->router->post('/login', [$auth, 'login']);
$jinx->router->post('/register', [$auth, 'register']);

$jinx->run();
