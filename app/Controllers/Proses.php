<?php

namespace App\Controllers;

use App\Models\ProsesModel;

class Proses extends BaseController
{

    public function index()
    {

        $model=
        new ProsesModel();

        $data['proses']=
        $model->findAll();

        return view(
            'dashboard/proses/index',
            $data
        );

    }


    public function tambah()
    {

        return view(
            'dashboard/proses/tambah'
        );

    }


    public function save()
    {

        $model=
        new ProsesModel();

        $model->save([

'batch_id'=>$this->request
->getPost('batch_id'),

'status'=>$this->request
->getPost('status'),

'lokasi'=>$this->request
->getPost('lokasi'),

'tanggal'=>$this->request
->getPost('tanggal'),

'keterangan'=>$this->request
->getPost('keterangan')

        ]);

        return redirect()
        ->to('/proses');

    }


    public function hapus($id)
    {

        $model=
        new ProsesModel();

        $model->delete($id);

        return redirect()
        ->to('/proses');

    }
    public function edit($id)
{

$model=
new ProsesModel();

$data['proses']=
$model->find($id);

return view(
'dashboard/proses/edit',
$data
);

}


public function update($id)
{

$model=
new ProsesModel();

$model->update($id,[

'status'=>
$this->request
->getPost('status'),

'lokasi'=>
$this->request
->getPost('lokasi'),

'tanggal'=>
$this->request
->getPost('tanggal'),

'keterangan'=>
$this->request
->getPost('keterangan')

]);


return redirect()
->to('/proses');

}
}