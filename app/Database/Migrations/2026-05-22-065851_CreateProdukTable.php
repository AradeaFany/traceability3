<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateProdukTable extends Migration
{
    public function up()
{

$this->forge->addField([

'id'=>[
'type'=>'INT',
'auto_increment'=>true,
'unsigned'=>true
],

'nama_produk'=>[
'type'=>'VARCHAR',
'constraint'=>100
],

'jenis'=>[
'type'=>'VARCHAR',
'constraint'=>100
],

'created_at'=>[
'type'=>'DATETIME',
'null'=>true
]

]);

$this->forge->addKey('id',true);

$this->forge->createTable('produk');

}

    public function down()
    {
        $this->forge->dropTable('produk');
    }
}
