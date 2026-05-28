<?php

namespace App\Controllers;

use App\Models\ProdukModel;

class Produk extends BaseController
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
        new ProdukModel();

        $data['produk'] =
        $model->findAll();

        return view(
            'produk/index',
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
        return view(
            'produk/tambah'
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
        $model =
        new ProdukModel();

        $model->save([

            'nama_produk'=>
            $this->request
            ->getPost('nama_produk'),

            'jenis'=>
            $this->request
            ->getPost('jenis'),

            'deskripsi'=>
            $this->request
            ->getPost('deskripsi')

        ]);


        return redirect()
        ->to('/produk');

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
    $model =
    new ProdukModel();

    $data['produk'] =
    $model->find($id);

    return view(
        'produk/edit',
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
    new ProdukModel();

    $model->update($id,[

        'nama_produk'=>
        $this->request
        ->getPost(
            'nama_produk'
        ),

        'jenis'=>
        $this->request
        ->getPost(
            'jenis'
        ),

        'deskripsi'=>
        $this->request
        ->getPost(
            'deskripsi'
        )

    ]);


    return redirect()
    ->to('/produk');

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
        new ProdukModel();

        $model->delete($id);

        return redirect()
        ->to('/produk');

    }

}