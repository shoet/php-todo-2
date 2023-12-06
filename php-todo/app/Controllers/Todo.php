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
        return view("templates/header.php") .
            view("todo/new.php") .
            view("templates/footer.php");
    }

    public function create()
    {
        $model = model(TodoModel::class);
        $title = $this->request->getPost('title');
        $title = $this->request->getPost('title');
        log_message("error", $title);
        // $title = null;
        $result = $model->addTodo($title);
        if (!$result) {
            log_message("info", "failure");
            return redirect()->back()->with('errors', $model->errors());
        }
        log_message("info", "success");
        return redirect()->to("/todo");
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
