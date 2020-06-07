<?php

$app->get('/test/{name}', function($params) {
    $ctrl = new App\Controller\UserController();
    $ctrl->model->nome = $params[1];
    $ctrl->model->email = "email de $params[1]";
    $ctrl->save();

    return $params[1];
});
