<?php

namespace Napps\Rest\Controller;

use Napps\Rest\ORM\Model;

class Controller implements InterfaceController
{
    public Model $model;

    public function save()
    {
        $this->model->save();
    }

    public function select(array $conditions = [])
    {
        //
    }

    public function delete(array $data = [])
    {
        //
    }
}
