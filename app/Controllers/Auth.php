<?php

namespace App\Controllers;

use App\Models\UserModel;

class Auth extends BaseController
{

    public function login()
    {
        return view('login');
    }


    public function cekLogin()
    {

        $model = new UserModel();

        $email =
        $this->request->getPost('email');

        $password =
        $this->request->getPost('password');


        $user =
        $model
        ->where('email',$email)
        ->first();


        if($user){

            if(
                password_verify(
                    $password,
                    $user['password']
                )
            ){

                session()->set([

                    'id'=>$user['id'],

                    'nama'=>$user['nama'],

                    'role'=>$user['role'],

                    'login'=>true

                ]);

                return redirect()
                ->to('/dashboard');

            }

        }

        return redirect()
        ->back()
        ->with(
            'error',
            'Email/password salah'
        );

    }



    public function logout()
    {

        session()->destroy();

        return redirect()
        ->to('/login');

    }


}