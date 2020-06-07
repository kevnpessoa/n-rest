<?php

require __DIR__ . '/vendor/autoload.php';

$app = new Napps\Rest\App();
$app->setRenderer(new Napps\Rest\Renderer\PHPRenderer());

require __DIR__ . '/router.php';

$app->run();
