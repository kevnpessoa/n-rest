<?php

require __DIR__ . '/vendor/autoload.php';

$app = new Napps\Rest\App();
$app->setRenderer(new Napps\Rest\Renderer\PHPRenderer());

$app->get('/teste/{name}', function($params) {
    return $params;
});

$app->run();
