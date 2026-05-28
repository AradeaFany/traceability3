<?php

namespace App\Controllers;

use App\Models\UserModel;

class User extends BaseController
{
    public function register()
    {
        
        return view('register');
    }
    
    public function index()
    {

        if(
        session()->get('role')
        !='admin'
        )
        {
            return redirect()
            ->to('/dashboard');
        }

        $model =
        new UserModel();

        $data['user'] =
        $model->findAll();

        return view(
        'dashboard/user/index',
        $data
        );

    }



    public function tambah()
    {

        if(
        session()->get('role')
        !='admin'
        )
        {
            return redirect()
            ->to('/dashboard');
        }

        return view(
        'dashboard/user/tambah'
        );

    }



    public function save()
    {

        if(
        session()->get('role')
        !='admin'
        )
        {
            return redirect()
            ->to('/dashboard');
        }

        $model =
        new UserModel();

        $model->save([

'nama'=>
$this->request
->getPost('nama'),

'email'=>
$this->request
->getPost('email'),

'password'=>
password_hash(

$this->request
->getPost('password'),

PASSWORD_DEFAULT

),

'role'=>
$this->request
->getPost('role')

        ]);

        return redirect()
        ->to('/user');

    }



    public function edit($id)
    {

        if(
        session()->get('role')
        !='admin'
        )
        {
            return redirect()
            ->to('/dashboard');
        }

        $model =
        new UserModel();

        $data['user'] =
        $model->find($id);

        return view(
        'dashboard/user/edit',
        $data
        );

    }



    public function update($id)
    {

        if(
        session()->get('role')
        !='admin'
        )
        {
            return redirect()
            ->to('/dashboard');
        }

        $model =
        new UserModel();

        $model->update($id,[

'nama'=>
$this->request
->getPost('nama'),

'email'=>
$this->request
->getPost('email'),

'role'=>
$this->request
->getPost('role')

        ]);

        return redirect()
        ->to('/user');

    }



    public function hapus($id)
    {

        if(
        session()->get('role')
        !='admin'
        )
        {
            return redirect()
            ->to('/dashboard');
        }

        $model =
        new UserModel();

        $model->delete($id);

        return redirect()
        ->to('/user');

    }

}