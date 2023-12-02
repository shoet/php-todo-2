<?php

namespace App\Database\Seeds;

class TodoSeeder extends \CodeIgniter\Database\Seeder
{
    public function run()
    {
        $data = [
            [
                'title' => 'Buy some milk',
                'status' => '0',
            ],
            [
                'title' => 'Buy some bread',
                'status' => '0',
            ],
            [
                'title' => 'Buy some eggs',
                'status' => '0',
            ],
        ];

        // Simple Queries
        // $this->db->query("INSERT INTO todo (title, status) VALUES(:title:, :status:)", $data);

        // Using Query Builder
        $this->db->table('todo')->insertBatch($data);
    }
}
