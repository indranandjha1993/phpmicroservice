<?php

use DI\ContainerBuilder;
use App\Handlers\KeyHandler;
use App\Services\KeyService;
use App\Repositories\KeyRepository;
use Psr\Container\ContainerInterface;

return function (ContainerBuilder $containerBuilder) {
    $containerBuilder->addDefinitions([
        KeyHandler::class => function (ContainerInterface $c) {
            $service = $c->get(KeyService::class);
            return new KeyHandler($service);
        },
        KeyService::class => function (ContainerInterface $c) {
            $repository = $c->get(KeyRepository::class);
            return new KeyService($repository);
        },
        KeyRepository::class => function (ContainerInterface $c) {
            return new KeyRepository();
        },
    ]);
};
