<?php
use App\Middleware\CorsMiddleware;

$app->add(new CorsMiddleware());
