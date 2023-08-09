<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Pegawais extends Migration
{
    public function up()
    {
        $this->forge->addField([
                        'id_pegawai'          => [
                                'type'           => 'INT',
                                'constraint'     => 11,
                                'unsigned'       => true,
                                'auto_increment' => true,
                        ],
                        'nama'       => [
                                'type'           => 'VARCHAR',
                                'constraint'     => '100',
                        ],
                        'tanggal_lahir' => [
                                'type'           => 'Date',
                                'null'           => false,
            ],
            'pekerjaan' => [
                                'type'           => 'VARCHAR',
                                'constraint'     => '100',
            ],
                'email' => [
                                'type'           => 'VARCHAR',
                                'constraint'     => '100',
                        ],
                        'alamat' => [
                                'type'           => 'VARCHAR',
                                'constraint'     => '150',
                        ],
                ]);
                $this->forge->addKey('id_pegawai', true);
                $this->forge->createTable('pegawais');
    }

    //--------------------------------------------------------------------

    public function down()
    {
        $this->forge->dropTable('pegawais');
    }
}