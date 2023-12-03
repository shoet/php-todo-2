<?php

namespace App\Controllers;

use App\Models\TodoModel;

class Todo extends BaseController
{
    public function index(): string
    {
        $model = model(TodoModel::class);
        $model->getTodo();

        return "hoge";
    }

    public function new(): string
    {
        return "new tood form";
    }

    public function create(): string
    {
        return "create post success";
    }

}
