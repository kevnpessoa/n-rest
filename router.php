<?php

$app->get('/test/{name}', function($params) {
    $model = new App\Controller\UserController();
    $model->model->nome = $params[1];
    $model->model->email = "email de $params[1]";
    $model->save();

    return $params[1];
});
