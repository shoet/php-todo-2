<?php

namespace App\Models;

use CodeIgniter\Model;

class TodoModel extends Model
{
    protected $table      = 'todo';

    protected $allowedFields = ['id', 'title', 'status'];
}
