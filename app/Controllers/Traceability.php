<?php

namespace App\Controllers;
use Endroid\QrCode\QrCode;
use Endroid\QrCode\Writer\PngWriter;

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

public function detail($id)
{
    $db =
    \Config\Database::connect();

    $data['trace'] =
    $db->table('proses')
    ->join(
        'batch',
        'batch.id=proses.batch_id'
    )
    ->join(
        'produk',
        'produk.id=batch.produk_id'
    )
    ->where(
        'batch.id',
        $id
    )
    ->get()
    ->getResultArray();

    return view(
        'dashboard/traceability/detail',
        $data
    );
}

public function qrcode($id)
{
    $url =
    base_url('/tracking/'.$id);

    $qr =
    new QrCode($url);

    $writer =
    new PngWriter();

    $result =
    $writer->write($qr);

    return $this->response
        ->setHeader(
            'Content-Type',
            'image/png'
        )
        ->setBody(
            $result->getString()
        );
}

}