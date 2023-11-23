<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        echo "UserController.index";
        die();
    }
    public function show($id)
    {
        echo "TasksController.show $id";
        die();
    }
}