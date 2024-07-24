<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Barang extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'           => [
                 'type'           => 'INT',
                 'constraint'     => 11,
                 'unsigned'       => TRUE,
                 'auto_increment' => TRUE
              ],
              'barcode'       => [
                  'type'           => 'VARCHAR',
                  'constraint'     => '255',
              ],
              'nama'       => [
                  'type'           => 'VARCHAR',
                  'constraint'     => '255',
              ],
              'departmen'       => [
                  'type'           => 'VARCHAR',
                  'constraint'     => '255',
              ],
              'uom'       => [
                  'type'           => 'VARCHAR',
                  'constraint'     => '255',
              ],
              'stok'     => [
                   'type'           => 'INT'
              ],
        ]);
        $this->forge->addKey('id', TRUE);
        $this->forge->createTable('barangs');
    }

    public function down()
    {
        //
    }
}