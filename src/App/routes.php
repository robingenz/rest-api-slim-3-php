<?php
use App\Controllers\DefaultController;
use App\Controllers\UserController;

// TODO test
// $app->options('/{routes:.+}', function ($request, $response, $args) {
//     return $response;
// });

$app->get('/', DefaultController::class . ':index');
$app->get('/ping', DefaultController::class . ':ping');

$app->post('/register', AuthController::class . ':register');
$app->post('/token', AuthController::class . ':token');

// $app->group('v1', function (Slim\App $app) {

// });
