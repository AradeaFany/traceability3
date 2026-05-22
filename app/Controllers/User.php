<?php

namespace App\Controllers;

use App\Models\UserModel;

class User extends BaseController
{

    public function register()
    {
        return view('register');
    }


    public function save()
    {

        $model = new UserModel();

        $model->save([

            'nama'=>$this->request->getPost('nama'),

            'email'=>$this->request->getPost('email'),

            'password'=>password_hash(
                $this->request->getPost('password'),
                PASSWORD_DEFAULT
            ),

            'role'=>$this->request->getPost('role')

        ]);

        return redirect()->to('/login');

    }

}