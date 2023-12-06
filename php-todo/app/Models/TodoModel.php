<?php

namespace App\Models;

use CodeIgniter\Model;

class TodoModel extends Model
{
    protected $table = 'todo';

    protected $allowedFields = ['title', 'status'];

    public function getTodo(): array
    {
        return $this->findAll();
    }

    public function getTodoByStatus($status): array
    {
        return $this->where('status', $status)->findAll();
    }

    public function addTodo($title): bool
    {
        $data = [
            'title' => $title,
            'status' => '0',
        ];
        return $this->insert($data);
    }

    public function updateStatus($id, $status): bool
    {
        $data = [
            'status' => $status
        ];
        log_message("error", "#############");
        log_message("error", $id);
        log_message("error", $status);
        $this->where('id', $id);
        return $this->update($id, $data);
    }

}
