<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateDokumenTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'nama_dokumen' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'deskripsi_dokumen' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'link_dokumen' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'tanggal' => [
                'type' => 'DATE',
            ],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('dokumen');
    }

    public function down()
    {
        $this->forge->dropTable('dokumen');
    }
}
