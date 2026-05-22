<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateProsesTable extends Migration
{
    public function up()
{

$this->forge->addField([

'id'=>[
'type'=>'INT',
'unsigned'=>true,
'auto_increment'=>true
],

'batch_id'=>[
'type'=>'INT',
'unsigned'=>true
],

'aktor'=>[
'type'=>'VARCHAR',
'constraint'=>100
],

'keterangan'=>[
'type'=>'TEXT'
],

'lokasi'=>[
'type'=>'VARCHAR',
'constraint'=>150
],

'tanggal'=>[
'type'=>'DATE'
]

]);

$this->forge->addKey('id',true);

$this->forge->addForeignKey(
'batch_id',
'batch',
'id',
'CASCADE',
'CASCADE'
);

$this->forge->createTable('proses');

}

    public function down()
    {
        //
    }
}
