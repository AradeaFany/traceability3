<?php

namespace App\Controllers;

class Auth extends BaseController
{
    public function login()
    {
        return view('login');
    }

    public function logout()
    {
        session()->destroy();

        return redirect()->to('/login');
    }
}