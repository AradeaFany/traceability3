<?php

namespace App\Controllers;

class Dashboard
extends BaseController
{
public function index()
{

if(
!session()->get('login')
){

return redirect()
->to('/login');

}


$role =
session()->get(
'role'
);


if(
$role=='supplier'
){

return view(
'dashboard/supplier'
);

}


if(
$role=='pabrik'
){

return view(
'dashboard/pabrik'
);

}


if(
$role=='distributor'
){

return view(
'dashboard/distributor'
);

}


return view(
'dashboard/index'
);

}

}