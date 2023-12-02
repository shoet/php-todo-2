<?php

namespace App\Controllers;

class Todo extends BaseController
{
    public function index(): string
    {
        return view('templates/header')
            . view('todo/index')
            . view('templates/footer');
    }
}
