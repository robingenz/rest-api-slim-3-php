<?php
use App\Handler\ErrorHandler;
use App\Handler\NotFoundHandler;
use App\Handler\PhpErrorHandler;
use Psr\Container\ContainerInterface;

$container = $app->getContainer();

$container['db'] = function ($container) {
    $dbSettings = $container->get('settings')['db'];
    $dsn = sprintf('%s:host=%s;dbname=%s', $dbSettings['driver'], $dbSettings['hostname'], $dbSettings['database']);
    $pdo = new PDO($dsn, $dbSettings['username'], $dbSettings['password']);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    return $pdo;
};
