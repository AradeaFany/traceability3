<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateBatchTable extends Migration
{
    public function up()
{

$this->forge->addField([

'id'=>[
'type'=>'INT',
'unsigned'=>true,
'auto_increment'=>true
],

'produk_id'=>[
'type'=>'INT',
'unsigned'=>true
],

'user_id'=>[
'type'=>'INT',
'unsigned'=>true
],

'tanggal_panen'=>[
'type'=>'DATE'
],

'lokasi'=>[
'type'=>'VARCHAR',
'constraint'=>150
],

'kode_batch'=>[
'type'=>'VARCHAR',
'constraint'=>100
]

]);

$this->forge->addKey('id',true);

$this->forge->addForeignKey(
'produk_id',
'produk',
'id',
'CASCADE',
'CASCADE'
);

$this->forge->addForeignKey(
'user_id',
'users',
'id',
'CASCADE',
'CASCADE'
);

$this->forge->createTable('batch');

}

    public function down()
    {
        //
    }
}
