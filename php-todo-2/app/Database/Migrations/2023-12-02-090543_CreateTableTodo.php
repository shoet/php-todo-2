<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTableTodo extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'title' => [
                'type' => 'VARCHAR',
                'constraint' => '128',
                'null' => false,
            ],
            'status' => [
                'type' => 'VARCHAR',
                'constraint' => '128',
                'null' => false,
            ],
        ]);
        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('todo');
    }

    public function down()
    {
        $this->forge->dropTable('news');
    }
}
