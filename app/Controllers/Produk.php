<?php

namespace App\Controllers;

use App\Models\ProdukModel;

class Produk extends BaseController
{

    public function index()
    {

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

        return view(
            'produk/tambah'
        );

    }



    public function save()
    {

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

        $model =
        new ProdukModel();

        $model->delete($id);

        return redirect()
        ->to('/produk');

    }

}