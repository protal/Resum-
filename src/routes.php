<?php

use Slim\Http\Request;
use Slim\Http\Response;

// Routes

$app->get('/', function (Request $request, Response $response, array $args) {
    $this->logger->info("index'/' route");
    return $this->view->render($response, 'index.html');
});
