<?php

namespace App\Models;

use CodeIgniter\Model;

class TodoModel extends Model
{
    protected $table = 'todo';

    protected $allowedFields = ['title', 'body'];

    public function getTodo(): array
    {
        return $this->findAll();
    }
}
