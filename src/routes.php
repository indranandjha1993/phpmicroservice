<?php

use App\Handlers\KeyHandler;
use Slim\App;

return function (App $app) {
    $app->get('/get/{key}', KeyHandler::class . ':getKey');
    $app->post('/set/{key}/{value}', KeyHandler::class . ':setKey');
};
