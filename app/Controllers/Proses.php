<?php

namespace App\Controllers;

use App\Models\ProsesModel;

class Proses extends BaseController
{

    public function index()
    {
if(

session()->get('role')
!='admin'

&&

session()->get('role')
!='pabrik'

&&

session()->get('role')
!='distributor'

)
{
return redirect()->to('/dashboard');
}
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
    if(

session()->get('role')
!='admin'

&&

session()->get('role')
!='pabrik'

&&

session()->get('role')
!='distributor'

)
{
return redirect()->to('/dashboard');
}
$db = \Config\Database::connect();

$data['batch'] =
$db->table('batch')
->get()
->getResultArray();

return view(
'dashboard/proses/tambah',
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
!='pabrik'

&&

session()->get('role')
!='distributor'

)
{
return redirect()->to('/dashboard');
}
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
if(

session()->get('role')
!='admin'

&&

session()->get('role')
!='pabrik'

&&

session()->get('role')
!='distributor'

)
{
return redirect()->to('/dashboard');
}
        $model=
        new ProsesModel();

        $model->delete($id);

        return redirect()
        ->to('/proses');

    }
    public function edit($id)
{
if(

session()->get('role')
!='admin'

&&

session()->get('role')
!='pabrik'

&&

session()->get('role')
!='distributor'

)
{
return redirect()->to('/dashboard');
}
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
if(

session()->get('role')
!='admin'

&&

session()->get('role')
!='pabrik'

&&

session()->get('role')
!='distributor'

)
{
return redirect()->to('/dashboard');
}
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