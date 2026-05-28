<?php

namespace App\Controllers;

use Config\Database;

class Dashboard extends BaseController
{
    public function index()
    {


if(!session()->get('login'))
{
return redirect()->to('/login');
}


        $db = Database::connect();

        $data['totalProduk'] =
        $db->table('produk')->countAll();

        $data['totalBatch'] =
        $db->table('batch')->countAll();

        $data['distribusiAktif'] =
        $db->table('proses')
        ->where('status !=','Selesai')
        ->countAllResults();

        $data['produkSampai'] =
        $db->table('proses')
        ->where('status','Selesai')
        ->countAllResults();

        $data['aktivitas'] =
        $db->table('proses')
        ->join('batch',
            'batch.id=proses.batch_id')
        ->join('produk',
            'produk.id=batch.produk_id')
        ->select(
            'produk.nama_produk,
             batch.kode_batch,
             proses.status,
             proses.tanggal'
        )
        ->orderBy('proses.id','DESC')
        ->get()
        ->getResultArray();

        return view(
            'dashboard/index',
            $data
        );
    }
}