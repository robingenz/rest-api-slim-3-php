<?php

namespace App\Controllers;

use Slim\Container;
use Slim\Http\Request;
use Slim\Http\Response;

class AuthController extends BaseController
{
    public function __construct(Container $container)
    {
        $this->container = $container;
    }

    public function register(Request $request, Response $response, $args)
    {
        $data = [
            'message' => 'index',
        ];
        return $response
            ->withJson($data);
    }
}
