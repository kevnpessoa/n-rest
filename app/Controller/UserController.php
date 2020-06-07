<?php

namespace App\Controller;

use Napps\Rest\Controller\Controller;
use App\Model\UsersModel;

class UserController extends Controller
{
    public function __construct()
    {
        $this->model = new UsersModel();
    }
}
