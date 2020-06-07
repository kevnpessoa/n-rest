<?php

namespace Napps\Rest\Controller;

interface InterfaceController
{
    public function save();
    public function select(array $conditions = []);
    public function delete(array $data = []);
}
