<?php

namespace App\Controllers;

class Traceability extends BaseController
{

public function index()
{

$db=
\Config\Database::connect();

$data['trace']=

$db->table('proses')

->select('

proses.*,

batch.kode_batch,

produk.nama_produk

')

->join(
'batch',
'batch.id=proses.batch_id'
)

->join(
'produk',
'produk.id=batch.produk_id'
)

->get()

->getResultArray();


return view(
'dashboard/traceability/index',
$data
);

}

}