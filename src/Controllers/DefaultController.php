<?php

namespace App\Controllers;

use Slim\Container;
use Slim\Http\Request;
use Slim\Http\Response;

class DefaultController extends BaseController
{
    public function __construct(Container $container)
    {
        $this->container = $container;
    }

    public function index(Request $request, Response $response, $args)
    {
        $data = [
            'message' => 'index',
        ];
        return $response
            ->withJson($data);
    }

    public function ping(Request $request, Response $response, $args)
    {
        return $response
            ->withHeader('Content-Type', 'text/html')
            ->write('pong');
    }
}
