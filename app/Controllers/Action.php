<?php

namespace App\Controllers;

use App\Models\profileModel;

class Action extends BaseController
{
    protected $profileModel;
    protected $helpers;

    public function __construct()
    {
        $helpers = ['url', 'file', 'url_helper'];
        $this->profileModel = new profileModel();
    }

    public function update($id)
    {
        if ($id) {
            $this->$id();
        } else {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
    }

    public function profile()
    {
        if ($this->request->isAJAX()) {
            $id = 1;
            $data = [
                'name' => $this->request->getVar('name'),
                'description' => $this->request->getVar('description'),
                'information' => $this->request->getVar('information'),
            ];
            $this->profileModel->updateData($data);
        } else {
            echo 'Bukan Ajax';
        }
    }

    public function services()
    {
        if ($this->request->isAJAX()) {
            $id = 1;
            echo $this->request->getVar('id');
            // $this->profileModel->updateData($data);
        } else {
            echo 'Bukan Ajax';
        }
    }


    //--------------------------------------------------------------------

}
