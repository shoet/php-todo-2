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
        // $title = null; TODO: try catch
        $result = $model->addTodo($title);
        if (!$result) {
            log_message("error", "Failed to add new todo");
            return redirect()->back()->with('errors', $model->errors());
        }
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

    public function updateStatus()
    {
        $data = $this->request->getJSON();
        $id = $data->id;
        $status = $data->status;

        $model = model(TodoModel::class);
        $result = $model->updateStatus($id, $status);
        if (!$result) {
            log_message("error", "Failed to update todo status");
            return redirect()->back()->with('errors', $model->errors());
        }

        return redirect()->to("/todo");
    }

}
