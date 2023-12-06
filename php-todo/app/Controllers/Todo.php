<?php

namespace App\Controllers;

use App\Models\TodoModel;

class Todo extends BaseController
{
    public function index(): string
    {
        $model = model(TodoModel::class);
        $todo = $model->getTodoByStatus(0);

        $data = [
            'todos' => $todo
        ];

        return view("templates/header.php") .
            view("todo/todo.php") .
            view("todo/list.php", $data) .
            view("templates/footer.php");
    }

    public function new(): string
    {
        return "new tood form";
    }

    public function create(): string
    {
        return "create post success";
    }

    public function done(): string
    {
        $model = model(TodoModel::class);
        $todo = $model->getTodoByStatus(1);

        $data = [
            'todos' => $todo
        ];

        return view("templates/header.php") .
            view("todo/done.php") .
            view("todo/list.php", $data) .
            view("templates/footer.php");
    }

}
