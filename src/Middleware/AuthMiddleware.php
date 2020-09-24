<?php
namespace App\Middleware;

use Slim\Container;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Firebase\JWT\JWT;

class AuthMiddleware
{
    private $container;

    public function __construct(Container $container)
    {
        $this->container = $container;
    }

    public function __invoke(Request $request, Response $response, $next)
    {
        $authHeader = $request->getHeaderLine('Authorization');
        $jwt = explode('Bearer ', $authHeader)[1];
        try {
            $decodedJwt = JWT::decode($token, getenv('SECRET_KEY'), ['HS256']);
        } catch (\Exception $e) {
            throw new \Exception('Authorization has been denied for this request.', 401);
        }
    }
}
