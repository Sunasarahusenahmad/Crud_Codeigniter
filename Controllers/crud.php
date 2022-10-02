<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\crudmodel;

class crud extends BaseController
{
    public function select()
    {

        // [Load the Model]
        $crud_user = new crudmodel();

        // [$data['user'] *user* is a name of the table]
        $data['user'] = $crud_user->findAll();

        echo view('includes/header');
        return view('all_crud_pages/select', $data); // ** Athva aa pan lakhi shako cho. ### echo view('all_crud_pages/select'); ###
        echo view('includes/footer');
    }

    public function insert()
    {
        echo view('includes/header');
        return view('all_crud_pages/insert');
        echo view('includes/footer');
    }

    public function store()
    {
        $crud_user = new crudmodel();

        $data = [
            'name' => $this->request->getPost('name'),
            'contact' => $this->request->getPost('contact'),
            'email' => $this->request->getPost('email')
        ];

        $crud_user->save($data);
        return redirect()->to(base_url('/'))->with('status', 'User Added Successfully !...');
    }

    public function edit($id)
    {

        $crud_user = new crudmodel();
        $data['user'] = $crud_user->find($id);

        echo view('includes/header');
        return view('all_crud_pages/edit', $data);
        echo view('includes/footer');

    }

    public function update($id)
    {
        $crud_user = new crudmodel();
        $data = [
            'name' => $this->request->getPost('name'),
            'contact' => $this->request->getPost('contact'),
            'email' => $this->request->getPost('email')
        ];
        $crud_user->update($id, $data);
        return redirect()->to(base_url('/'))->with('status', 'User Updated Successfully !...');
    }

    public function delete($id)
    {
        $crud_user = new crudmodel();
        $crud_user->delete($id);
        return redirect()->to(base_url('/'))->with('status', 'User Deleted Successfully !...');

    }
}
