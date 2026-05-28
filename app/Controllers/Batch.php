<?php

namespace App\Controllers;

use App\Models\BatchModel;
use App\Models\ProdukModel;

class Batch extends BaseController
{

    public function index()
    {
if(

session()->get('role')
!='admin'

&&

session()->get('role')
!='supplier'

)
{
return redirect()->to('/dashboard');
}
        $model =
        new BatchModel();

        $data['batch']=
        $model->findAll();

        return view(
            'batch/index',
            $data
        );

    }



    public function tambah()
    {
if(

session()->get('role')
!='admin'

&&

session()->get('role')
!='supplier'

)
{
return redirect()->to('/dashboard');
}
        $produk =
        new ProdukModel();

        $data['produk']=
        $produk->findAll();

        return view(
            'batch/tambah',
            $data
        );

    }



    public function save()
    {
if(

session()->get('role')
!='admin'

&&

session()->get('role')
!='supplier'

)
{
return redirect()->to('/dashboard');
}
        $model=
        new BatchModel();

        $model->save([

            'produk_id'=>
            $this->request
            ->getPost(
                'produk_id'
            ),

            'user_id'=>
            session()->get(
                'id'
            ),

            'tanggal_panen'=>
            $this->request
            ->getPost(
                'tanggal_panen'
            ),

            'lokasi'=>
            $this->request
            ->getPost(
                'lokasi'
            ),

            'kode_batch'=>
            $this->request
            ->getPost(
                'kode_batch'
            )

        ]);


        return redirect()
        ->to('/batch');

    }
    public function edit($id)
{
if(

session()->get('role')
!='admin'

&&

session()->get('role')
!='supplier'

)
{
return redirect()->to('/dashboard');
}
    $batch =
    new BatchModel();

    $produk =
    new ProdukModel();

    $data['batch'] =
    $batch->find($id);

    $data['produk'] =
    $produk->findAll();

    return view(
        'batch/edit',
        $data
    );

}
    public function update($id)
{
if(

session()->get('role')
!='admin'

&&

session()->get('role')
!='supplier'

)
{
return redirect()->to('/dashboard');
}
    $model =
    new BatchModel();

    $model->update($id,[

        'produk_id'=>
        $this->request
        ->getPost('produk_id'),

        'tanggal_panen'=>
        $this->request
        ->getPost('tanggal_panen'),

        'lokasi'=>
        $this->request
        ->getPost('lokasi'),

        'kode_batch'=>
        $this->request
        ->getPost('kode_batch')

    ]);


    return redirect()
    ->to('/batch');

}

    public function delete($id)
{
if(

session()->get('role')
!='admin'

&&

session()->get('role')
!='supplier'

)
{
return redirect()->to('/dashboard');
}
    $model =
    new BatchModel();

    $model->delete($id);

    return redirect()
    ->to('/batch');

}
}