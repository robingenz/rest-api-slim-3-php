<?php
use App\Repositories\UserRepository;

$container = $app->getContainer();

$container['errorHandler'] = function (ContainerInterface $container) {
    return new ErrorHandler();
};

$container['notFoundHandler'] = function (ContainerInterface $container) {
    return new NotFoundHandler();
};

if (!$_ENV['APP_DEBUG']) {
    $container['phpErrorHandler'] = function (ContainerInterface $container) {
        return new PhpErrorHandler();
    };
}

$container['userRepository'] = function (ContainerInterface $container) {
    return new UserRepository($container->get('db'));
};