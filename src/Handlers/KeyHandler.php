<?php

namespace App\Handlers;

use App\Services\KeyService;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

class KeyHandler
{
    private $service;

    public function __construct(KeyService $service)
    {
        $this->service = $service;
    }

    public function getKey(Request $request, Response $response, array $args): Response
    {
        $key = $args['key'];
        $value = $this->service->get($key);
        $response->getBody()->write(json_encode($value));
        return $response;
    }

    public function setKey(Request $request, Response $response, array $args): Response
    {
        $key = $args['key'];
        $value = $args['value'];
        $this->service->set($key, $value);
        $response->getBody()->write(json_encode("Successfully set value"));
        return $response;
    }
}
