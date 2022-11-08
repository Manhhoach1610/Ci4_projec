<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UModel;

class UserCRUD extends BaseController
{
    public function index()
    {
        $data = [];
        $model = new UModel();
        $data['db_dsusers'] = $model->findAll();
        echo view('view_user', $data);
    }

    public function create() {
        return view('view_add');
    }

    public function blue() {
        helper(['form','url']);
        $model = new UModel();
        $data = [
            'name' => $this->request->getVar('name'),
            'diachi' => $this->request->getVar('diachi'),
        ];
        $save = $model->insert($data);
        return redirect()->to('/user_crud');
    }

    public function edit($id = null) {
        $model = new UModel();
        $data['db_dsusers'] = $model->where('id', $id)->first();
        return view('view_edit', $data);
    }

    public function update() {
        helper(['form','url']);
        $model = new UModel();
        $id = $this->request->getVar('id');
        $data = [
            'name' => $this->request->getVar('name'),
            'diachi' => $this->request->getVar('diachi'),
        ];
        $save = $model->update($id, $data);
        return redirect()->to('/user_crud');
    }

    public function delete($id=null) {
        $model = new UModel();
        $data['db_dsusers'] = $model->where('id', $id)->delete();
        return redirect()->to('/user_crud');
    }
}
