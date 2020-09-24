<?php
return ['settings' => [
    'displayErrorDetails' => $_ENV['APP_DEBUG'],
    'db' => [
        'driver' => $_ENV['DB_DRIVER'],
        'hostname' => $_ENV['DB_HOST'],
        'database' => $_ENV['DB_NAME'],
        'username' => $_ENV['DB_USER'],
        'password' => $_ENV['DB_PASS'],
    ]
]];
